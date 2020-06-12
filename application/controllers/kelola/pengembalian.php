<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengembalian extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_pengembalian');
	}

	public function index()
	{
		$this->fungsi->check_previleges('pengembalian');
		$data['pengembalian'] = $this->m_pengembalian->getData();
		$this->load->view('kelola/pengembalian/v_pengembalian_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form pengembalian";
		$subheader = "pengembalian";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("kelola/pengembalian/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("kelola/pengembalian/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('pengembalian');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'kode_pengembalian',
					'label' => 'kode_pengembalian',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('kelola/pengembalian/v_pengembalian_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_pengembalian','kode_produk','kode_supplier','tanggal_purchase','tanggal_pengembalian','jumlah_barang','keterangan'));
			$this->m_pengembalian->insertData($datapost);
			$this->fungsi->run_js('load_silent("kelola/pengembalian","#content")');
			$this->fungsi->message_box("Data Pengembalian disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Data Pengembalian dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('pengembalian');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'bebas',
					'rules' => ''
				),
				array(
					'field'	=> 'kode_pengembalian',
					'label' => 'Kode_pengembalian',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('pengembalian',array('id'=>$id));
			$data['pengembalian']='';
			$this->load->view('kelola/pengembalian/v_pengembalian_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_pengembalian','kode_produk','kode_supplier','tanggal_purchase','tanggal_pengembalian','jumlah_barang','keterangan'));
			$this->m_pengembalian->updateData($datapost);
			$this->fungsi->run_js('load_silent("kelola/pengembalian","#content")');
			$this->fungsi->message_box("Data Pengembalian sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Data Pengembalian dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_pengembalian->deleteData($id);
		redirect('admin');
	}
	}
