<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengembalian_view extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_pengembalian');
	}

	public function index()
	{
		$this->fungsi->check_previleges('pengembalian');
		$data['pengembalian'] = $this->m_pengembalian->getData();
		$this->load->view('kelola/pengembalian/v_pengembalian_view',$data);
    }
}