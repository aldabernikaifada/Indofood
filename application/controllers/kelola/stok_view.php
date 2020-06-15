<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stok_view extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->fungsi->restrict();
		$this->load->model('kelola/m_stok');
	}

	public function index()
	{
		$this->fungsi->check_previleges('stok');
		$data['stok'] = $this->m_stok->getData();
		$this->load->view('kelola/stok/v_stok_view',$data);
    }
}