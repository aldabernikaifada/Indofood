<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_customer extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('customer ma');
		$this->db->order_by('ma.id', 'desc');
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('customer',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('customer',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('customer');
	}

}

/* End of file m_customer.php */
/* Location: ./application/models/kelola/m_customer.php */