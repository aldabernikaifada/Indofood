<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class supplier extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_supplier');
	}

	public function index()
	{
		$this->fungsi->check_previleges('supplier');
		$data['supplier'] = $this->m_supplier->getData();
		$this->load->view('kelola/supplier/v_supplier_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form Supplier";
		$subheader = "Supplier";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("kelola/supplier/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("kelola/supplier/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('supplier');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'kode_supplier',
					'label' => 'kode_supplier',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('kelola/supplier/v_supplier_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_supplier','nama_supplier','alamat','telepon','keterangan'));
			$this->m_supplier->insertData($datapost);
			$this->fungsi->run_js('load_silent("kelola/supplier","#content")');
			$this->fungsi->message_box("Data Supplier disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Supplier dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('supplier');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'bebas',
					'rules' => ''
				),
				array(
					'field'	=> 'kode_supplier',
					'label' => 'Kode_supplier',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('supplier',array('id'=>$id));
			$data['status']='';
			$this->load->view('kelola/supplier/v_supplier_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_supplier','nama_supplier','alamat','telepon','keterangan'));
			$this->m_supplier->updateData($datapost);
			$this->fungsi->run_js('load_silent("kelola/supplier","#content")');
			$this->fungsi->message_box("Data Supplier sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Supplier dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_supplier->deleteData($id);
		redirect('admin');
	}
	}
