<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang_keluar extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('barang_keluar ma');
		$this->db->order_by('ma.id', 'desc');
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('barang_keluar',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('barang_keluar',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('barang_keluar');
	}

}

