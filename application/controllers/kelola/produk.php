<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_produk');
	}

	public function index()
	{
		$this->fungsi->check_previleges('produk');
		$data['produk'] = $this->m_produk->getData();
		$this->load->view('kelola/produk/v_produk_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form Produk";
		$subheader = "produk";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("kelola/produk/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("kelola/produk/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('produk');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'kode_produk',
					'label' => 'kode_produk',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('kelola/produk/v_produk_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_produk','nama_produk','jenis_produk','nama_supplier','harga_jual','harga_supplier','gambar'));
			$this->m_produk->insertData($datapost);
			$this->fungsi->run_js('load_silent("kelola/produk","#content")');
			$this->fungsi->message_box("Data Produk disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Produk dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('produk');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'bebas',
					'rules' => ''
				),
				array(
					'field'	=> 'kode_produk',
					'label' => 'Kode_produk',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('produk',array('id'=>$id));
			$data['status']='';
			$this->load->view('kelola/produk/v_produk_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_produk','nama_produk','jenis_produk','nama_supplier','harga_jual','harga_supplier','gambar'));
			$this->m_produk->updateData($datapost);
			$this->fungsi->run_js('load_silent("kelola/produk","#content")');
			$this->fungsi->message_box("Data Produk sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Produk dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_produk->deleteData($id);
		redirect('admin');
	}
	}
