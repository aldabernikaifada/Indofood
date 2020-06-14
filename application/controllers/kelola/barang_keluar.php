<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang_keluar extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_barang_keluar');
	}

	public function index()
	{
		$this->fungsi->check_previleges('barang_keluar');
		$data['barang_keluar'] = $this->m_barang_keluar->getData();
		$this->load->view('kelola/barang_keluar/v_barang_keluar_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form Barang Keluar";
		$subheader = "barang_keluar";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("kelola/barang_keluar/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("kelola/barang_keluar/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('barang_keluar');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'kode_barang_keluar',
					'label' => 'kode_barang_keluar',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('kelola/barang_keluar/v_barang_keluar_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_barang_keluar','kode_customer','nama_produk','jenis_produk','satuan','harga_satuan','jumlah','tanggal_keluar'));
			$this->m_barang_keluar->insertData($datapost);
			$this->fungsi->run_js('load_silent("kelola/barang_keluar","#content")');
			$this->fungsi->message_box("Data Barang Keluar disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah barang_keluar dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('barang_keluar');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => 'bebas',
					'rules' => ''
				),
				array(
					'field'	=> 'kode_barang_keluar',
					'label' => 'Kode_barang_keluar',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('barang_keluar',array('id'=>$id));
			$data['status']='';
			$this->load->view('kelola/barang_keluar/v_barang_keluar_edit',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kode_barang_keluar','kode_customer','nama_produk','jenis_produk','satuan','harga_satuan','jumlah','tanggal_keluar'));
			$this->m_barang_keluar->updateData($datapost);
			$this->fungsi->run_js('load_silent("kelola/barang_keluar","#content")');
			$this->fungsi->message_box("Data Barang Keluar sukses diperbarui...","success");
			$this->fungsi->catat($datapost,"Mengedit barang_keluar dengan data sbb:",true);
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_barang_keluar->deleteData($id);
		redirect('admin');
	}
	}
