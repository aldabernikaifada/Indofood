<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_user');
	}

	public function index()
	{
		$this->fungsi->check_previleges('user');
		$data['user'] = $this->m_user->getData();
		$this->load->view('kelola/user/v_user_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form Kelola User";
		$subheader = "user";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("kelola/user/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("kelola/user/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('user');
		$this->load->library('form_validation');
		$config = array(
			array(
				'field'	=> 'NoInduk',
				'label' => 'NoInduk',
				'rules' => 'required'
			)
		);
			
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('kelola/user/v_user_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','NoInduk','Username','Nama','JenisKelamin','Foto','Email','NoTelp','Level','Status'));
			$this->m_user->insertData($datapost);
			$this->fungsi->run_js('load_silent("kelola/user","#content")');
			$this->fungsi->message_box("Data Kelola User sukses disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Kelola user dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('user');
		$this->load->library('form_validation');
		$config = array(
			array(
				'field'	=> 'NoInduk',
				'label' => 'Kode Komponen',
				'rules' => 'trim|required'
			),
			array(
				'field'	=> 'Username',
				'label' => 'Kode Komponen',
				'rules' => 'trim|required'
			),
			array(
				'field'	=> 'Nama',
				'label' => 'Kode Komponen',
				'rules' => 'required'
			),
			array(
				'field'	=> 'JenisKelamin',
				'label' => 'Kode Komponen',
				'rules' => 'trim|required'
			),
			array(
				'field'	=> 'Foto',
				'label' => 'Nama Komponen',
				'rules' => 'required'
			),
			array(
				'field'	=> 'Email',
				'label' => 'Nama Komponen',
				'rules' => ''
			),
			array(
				'field'	=> 'NoTelp',
				'label' => 'Nama Komponen',
				'rules' => 'trim|required'
			),
			array(
				'field'	=> 'Level',
				'label' => 'Uraian Komponen',
				'rules' => ''
			),
			array(
				'field'	=> 'Status',
				'label' => 'Uraian Komponen',
				'rules' => ''
			),
		);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('kelola_user',array('id'=>$id));
			$data['status']='';
			$this->load->view('kelola/user/v_user_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','NoInduk','Username','Nama','JenisKelamin','Foto','Email','NoTelp','Level','Status','id_status'));
			$this->m_user->updateData($datapost);
			$this->fungsi->run_js('load_silent("kelola/user","#content")');
			$this->fungsi->message_box("Data Kelola User sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Kelola user dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_user->deleteData($id);
		redirect('admin');
	}
	public function edit_file($id='')
	{
		$upload_folder = get_upload_folder('./files/');

		$config['upload_path']   = $upload_folder;
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size']      = '3072';
		// $config['max_width']     = '1024';
		// $config['max_height']    = '1024';
		$config['encrypt_name']  = true;

	    $this->load->library('upload', $config);
	    $err = "";
	    $msg = "";
	    if ( ! $this->upload->do_upload('Foto'))
	    {
	      $err = $this->upload->display_errors('<span class="error_string">','</span>');
	    }
	    else
	    {
	      $data = $this->upload->data();
	      /***********************/
	      // CREATE THUMBNAIL 100x100 - maintain aspect ratio
	      /**********************/
	      $config['image_library'] = 'gd2';
	      $config['source_image'] = $upload_folder.$data['file_name'];
	      $config['maintain_ratio'] = TRUE;
	      $config['width'] = 100;
	      $config['height'] = 100;

	      $this->load->library('image_lib', $config);

	      if ( ! $this->image_lib->resize())
	      {
	        $err = $this->image_lib->display_errors('<span class="error_string">','</span>');
	      }
	      else
	      {
	      	$datapost = array(
			'id'                	=> $this->input->post('id'), 
			'NoInduk'            	=> $this->input->post('NoInduk'), 
			'Username'            	=> $this->input->post('Username'), 
			'Nama'              	=> $this->input->post('Nama'), 
			'JenisKelamin'          => $this->input->post('JenisKelamin'), 
			'Foto'              	=> substr($upload_folder,2).$data['file_name'], 
			'Email'           		=> $this->input->post('Email'), 
			'NoTelp'       			=> $this->input->post('NoTelp'), 
			'Level'      			=> $this->input->post('Level'), 
			'Status'     			=> $this->input->post('Status'), 
			
			);
			
	      }
	     }
	}

}

/* End of file instansi.php */
/* Location: ./application/controllers/kelola/user.php */
