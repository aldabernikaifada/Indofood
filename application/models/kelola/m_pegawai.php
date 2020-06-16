<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('pegawai ma');
		$this->db->order_by('ma.id', 'desc');
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('pegawai',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('pegawai',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('pegawai');
	}

}

/* End of file m_pegawai.php */
/* Location: ./application/models/kelola/m_pegawai.php */