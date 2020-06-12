<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stok extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_stok');
	}

	public function index()
	{
		$this->fungsi->check_previleges('stok');
		$data['stok'] = $this->m_stok->getData();
		$this->load->view('kelola/stok/v_stok_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form stok";
		$subheader = "stok";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("kelola/stok/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("kelola/stok/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('stok');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'kode_stok',
					'label' => 'kode_stok',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('kelola/stok/v_stok_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_stok','kode_produk','jenis_produk','purchase','produk_terjual','jumlah_stok','harga_satuan'));
			$this->m_stok->insertData($datapost);
			$this->fungsi->run_js('load_silent("kelola/stok","#content")');
			$this->fungsi->message_box("Data Stok disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Stok dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('stok');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'bebas',
					'rules' => ''
				),
				array(
					'field'	=> 'kode_stok',
					'label' => 'Kode_stok',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('stok',array('id'=>$id));
			$data['status']='';
			$this->load->view('kelola/stok/v_stok_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_stok','kode_produk','jenis_produk','purchase','produk_terjual','jumlah_stok','harga_satuan'));
			$this->m_stok->updateData($datapost);
			$this->fungsi->run_js('load_silent("kelola/stok","#content")');
			$this->fungsi->message_box("Data Stok sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Stok dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_stok->deleteData($id);
		redirect('admin');
	}
	}
