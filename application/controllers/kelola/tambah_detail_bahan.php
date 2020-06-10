<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_detail_bahan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_tambah_detail_bahan');
	}

	public function index()
	{
		$this->fungsi->check_previleges('tambah_detail_bahan');
		$data['tambah_detail_bahan'] = $this->m_tambah_detail_bahan->getData();
		$this->load->view('kelola/tambah_detail_bahan/v_tambah_detail_bahan_list',$data);
	}
	public function form($param='')
	{
		$content   = "<div id='divsubcontent'></div>";
		$header    = "Form tambah_detail_bahan";
		$subheader = "tambah_detail_bahan";
		$buttons[] = button('jQuery.facebox.close()','Tutup','btn btn-default','data-dismiss="modal"');
		echo $this->fungsi->parse_modal($header,$subheader,$content,$buttons,"");
		if($param=='base'){
			$this->fungsi->run_js('load_silent("kelola/tambah_detail_bahan/show_addForm/","#divsubcontent")');	
		}else{
			$base_kom=$this->uri->segment(5);
			$this->fungsi->run_js('load_silent("kelola/tambah_detail_bahan/show_editForm/'.$base_kom.'","#divsubcontent")');	
		}
	}
	public function show_addForm()
	{
		$this->fungsi->check_previleges('tambah_detail_bahan');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'kategori_bahan',
					'label' => 'kategori_bahan',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['status']='';
			$this->load->view('kelola/tambah_detail_bahan/v_tambah_detail_bahan_add',$data);
		}
		else
		{
			$datapost = get_post_data(array('id','kategori_bahan','merk','seri','gambar''spesifikasi','sop_pemeliharaan','sop_pemeriksaan','sop_uji_fungsi','sumber_pendanaan','harga','stok','tanggal_pembelian','lokasi_penyimpanan','kondisi','tipe','status'));
			$this->m_kelola_bahan->insertData($datapost);
			$this->fungsi->run_js('load_silent("kelola/kelola_bahan","#content")');
			$this->fungsi->message_box("Data Master Kelola Bahan sukses disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Master kelola_bahan dengan data sbb:",true);
		}
	}
	public function show_editForm($id='')
	{
		$this->fungsi->check_previleges('kelola_bahan');
		$this->load->library('form_validation');
		$config = array(
				array(
					'field'	=> 'id',
					'label' => '',
					'rules' => ''
				),
				array(
					'field'	=> 'nama_bahan',
					'label' => 'nama_bahan',
					'rules' => 'required'
				)
			);
		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<span class="error-span">', '</span>');

		if ($this->form_validation->run() == FALSE)
		{
			$data['edit'] = $this->db->get_where('kelola_bahan',array('id'=>$id));
			$data['status']='';
			$this->load->view('kelola/kelola_bahan/v_kelola_bahan_edit',$data);
		}
		else
		{
            $datapost = get_post_data(array('id','kategori_bahan','merk','seri','gambar''spesifikasi','sop_pemeliharaan','sop_pemeriksaan','sop_uji_fungsi','sumber_pendanaan','harga','stok','tanggal_pembelian','lokasi_penyimpanan','kondisi','tipe','status'));
			$this->m_kelola_bahan->updateData($datapost);
			$this->fungsi->run_js('load_silent("kelola/kelola_bahan","#content")');
			$this->fungsi->message_box("Data Master Kelola Bahan sukses disimpan...","success");
			$this->fungsi->catat($datapost,"Menambah Master kelola_bahan dengan data sbb:",true);;
		}
	}
	public function delete()
	{
		$id = $this->uri->segment(4);
		$this->m_kelola_bahan->deleteData($id);
		redirect('admin');
	}
}


	