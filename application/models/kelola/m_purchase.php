<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_purchase extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('purchase ma');
		$this->db->order_by('ma.id', 'desc');
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('purchase',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('purchase',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('purchase');
	}

}

