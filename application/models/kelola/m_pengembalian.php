<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengembalian extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('pengembalian ma');
		$this->db->order_by('ma.id', 'desc');
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('pengembalian',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('pengembalian',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('pengembalian');
	}

}

/* End of file m_pengembalian.php */
/* Location: ./application/models/kelola/m_pengembalian.php */