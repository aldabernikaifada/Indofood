<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_stok extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('stok ma');
		$this->db->order_by('ma.id', 'desc');
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('stok',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('stok',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('stok');
	}

}

/* End of file m_stok.php */
/* Location: ./application/models/kelola/m_stok.php */