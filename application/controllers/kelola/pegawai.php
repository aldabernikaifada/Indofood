<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_pegawai');
	}

	public function index()
	{
		$this->fungsi->check_previleges('pegawai');
		$data['pegawai'] = $this->m_pegawai->getData();
		$this->load->view('kelola/pegawai/v_pegawai_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form Pegawai";
		$subheader = "pegawai";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("kelola/pegawai/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("kelola/pegawai/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('pegawai');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'kode_pegawai',
					'label' => 'kode_pegawai',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('kelola/pegawai/v_pegawai_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_pegawai','nama','telepon','alamat','keterangan'));
			$this->m_pegawai->insertData($datapost);
			$this->fungsi->run_js('load_silent("kelola/pegawai","#content")');
			$this->fungsi->message_box("Data Pegawai disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Pegawai dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('pegawai');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'bebas',
					'rules' => ''
				),
				array(
					'field'	=> 'kode_pegawai',
					'label' => 'Kode_pegawai',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('pegawai',array('id'=>$id));
			$data['status']='';
			$this->load->view('kelola/pegawai/v_pegawai_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_pegawai','nama','telepon','alamat','keterangan'));
			$this->m_pegawai->updateData($datapost);
			$this->fungsi->run_js('load_silent("kelola/pegawai","#content")');
			$this->fungsi->message_box("Data Pegawai sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Data Pegawai dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_pegawai->deleteData($id);
		redirect('admin');
	}
	}
