<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penjualan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_penjualan');
	}

	public function index()
	{
		$this->fungsi->check_previleges('penjualan');
		$data['penjualan'] = $this->m_penjualan->getData();
		$this->load->view('kelola/penjualan/v_penjualan_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form penjualan";
		$subheader = "penjualan";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("kelola/penjualan/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("kelola/penjualan/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('penjualan');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'kode_penjualan',
					'label' => 'kode_penjualan',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('kelola/penjualan/v_penjualan_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_penjualan','kode_customer','kode_produk','nama_produk','tanggal_jual','jumlah','harga','total'));
			$this->m_penjualan->insertData($datapost);
			$this->fungsi->run_js('load_silent("kelola/penjualan","#content")');
			$this->fungsi->message_box("Data Penjualan disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Penjualan dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('penjualan');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'bebas',
					'rules' => ''
				),
				array(
					'field'	=> 'kode_penjualan',
					'label' => 'Kode_penjualan',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('penjualan',array('id'=>$id));
			$data['status']='';
			$this->load->view('kelola/penjualan/v_penjualan_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_penjualan','kode_customer','kode_produk','nama_produk','tanggal_jual','jumlah','harga','total'));
			$this->m_penjualan->updateData($datapost);
			$this->fungsi->run_js('load_silent("kelola/penjualan","#content")');
			$this->fungsi->message_box("Data Penjualan sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Penjualan dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_penjualan->deleteData($id);
		redirect('admin');
	}
	}
