<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produk_view extends CI_Controller {
	
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
		$this->load->view('kelola/produk/v_produk_view',$data);
    }
}