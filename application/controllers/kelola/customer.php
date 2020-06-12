<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_customer');
	}

	public function index()
	{
		$this->fungsi->check_previleges('customer');
		$data['customer'] = $this->m_customer->getData();
		$this->load->view('kelola/customer/v_customer_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form Customer";
		$subheader = "Customer";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("kelola/customer/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("kelola/customer/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('customer');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'kode_customer',
					'label' => 'kode_customer',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('kelola/customer/v_customer_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_customer','nama_customer','telepon','alamat','keterangan'));
			$this->m_customer->insertData($datapost);
			$this->fungsi->run_js('load_silent("kelola/customer","#content")');
			$this->fungsi->message_box("Data Customer disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Customer dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('customer');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'bebas',
					'rules' => ''
				),
				array(
					'field'	=> 'kode_customer',
					'label' => 'Kode_customer',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('customer',array('id'=>$id));
			$data['status']='';
			$this->load->view('kelola/customer/v_customer_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_customer','nama_customer','telepon','alamat','keterangan'));
			$this->m_customer->updateData($datapost);
			$this->fungsi->run_js('load_silent("kelola/customer","#content")');
			$this->fungsi->message_box("Data Customer sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit Customer dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_customer->deleteData($id);
		redirect('admin');
	}
	}
