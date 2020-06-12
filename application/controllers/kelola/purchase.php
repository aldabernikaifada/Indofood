<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class purchase extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_purchase');
	}

	public function index()
	{
		$this->fungsi->check_previleges('purchase');
		$data['purchase'] = $this->m_purchase->getData();
		$this->load->view('kelola/purchase/v_purchase_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form Purchase";
		$subheader = "purchase";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("kelola/purchase/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("kelola/purchase/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('purchase');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'kode_purchase',
					'label' => 'kode_purchase',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('kelola/purchase/v_purchase_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_purchase','nama_barang','jumlah_produk','tanggal_purchase','satuan','harga_satuan','total'));
			$this->m_purchase->insertData($datapost);
			$this->fungsi->run_js('load_silent("kelola/purchase","#content")');
			$this->fungsi->message_box("Data Purchase disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Purchase dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('purchase');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'bebas',
					'rules' => ''
				),
				array(
					'field'	=> 'kode_purchase',
					'label' => 'Kode_purchase',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('purchase',array('id'=>$id));
			$data['status']='';
			$this->load->view('kelola/purchase/v_purchase_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_purchase','nama_barang','jumlah_produk','tanggal_purchase','satuan','harga_satuan','total'));
			$this->m_purchase->updateData($datapost);
			$this->fungsi->run_js('load_silent("kelola/purchase","#content")');
			$this->fungsi->message_box("Data Purchase sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Purcahse dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_purchase->deleteData($id);
		redirect('admin');
	}
	}
