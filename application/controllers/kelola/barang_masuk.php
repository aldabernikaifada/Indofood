<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang_masuk extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_barang_masuk');
	}

	public function index()
	{
		$this->fungsi->check_previleges('barang_masuk');
		$data['barang_masuk'] = $this->m_barang_masuk->getData();
		$this->load->view('kelola/barang_masuk/v_barang_masuk_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form Barang Masuk";
		$subheader = "Barang Masuk";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("kelola/barang_masuk/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("kelola/barang_masuk/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('barang_masuk');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'kode_barangmasuk',
					'label' => 'kode_barangmasuk',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('kelola/barang_masuk/v_barang_masuk_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_barangmasuk','kode_supplier','nama_barang','jenis_barang','satuan','harga_satuan','jumlah','tanggal_masuk'));
			$this->m_barang_masuk->insertData($datapost);
			$this->fungsi->run_js('load_silent("kelola/barang_masuk","#content")');
			$this->fungsi->message_box("Data Barang Masuk disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Barang Masuk dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('barang_masuk');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'bebas',
					'rules' => ''
				),
				array(
					'field'	=> 'kode_barangmasuk',
					'label' => 'Kode_barangmasuk',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('barang_masuk',array('id'=>$id));
			$data['status']='';
			$this->load->view('kelola/barang_masuk/v_barang_masuk_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_barangmasuk','kode_supplier','nama_produk','jenis_produk','satuan','harga_satuan','jumlah','tanggal_masuk'));
			$this->m_barang_masuk->updateData($datapost);
			$this->fungsi->run_js('load_silent("kelola/barang_masuk","#content")');
			$this->fungsi->message_box("Data Barang Masuk sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Barang Masuk dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_barang_masuk->deleteData($id);
		redirect('admin');
	}
	}
