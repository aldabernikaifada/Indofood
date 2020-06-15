<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penjualan_view extends CI_Controller {
	
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
		$this->load->view('kelola/penjualan/v_penjualan_view',$data);
    }
}