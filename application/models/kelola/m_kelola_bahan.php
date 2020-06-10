<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelola_bahan extends CI_Model {

	public function getData($value='')
	{
		$this->db->from('kelola_bahan ma');
		$this->db->order_by('ma.id', 'desc');
		return $this->db->get();
	}

	public function insertData($data='')
	{
		
        $this->db->insert('kelola_bahan',$data);
       
	}

	public function updateData($data='')
	{
		 $this->db->where('id',$data['id']);
            $this->db->update('kelola_bahan',$data);
	}

	public function deleteData($id='')
	{
		$this->db->where('id', $id);
        $this->db->delete('kelola_bahan');
	}

	public function join()
	{
		$this->db->from('kelola_bahan');
		$this->db->join('master_master_bahan', 'master_master_bahan.id = kelola_bahan.master_bahan');
		$this->db->join('master_satuan', 'master_satuan.id = kelola_bahan.satuan_bahan');
		$this->db->join('master_kategori_alat_dan_bahan', 'master_kategori_alat_dan_bahan.id = kelola_bahan.kategori');
		$this->db->join('master_sumber_pendanaan', 'master_sumber_pendanaan.id = kelola_bahan.pendanaan');
		$this->db->join('lokasi_penyimpanan', 'lokasi_penyimpanan.id = kelola_bahan.lokasi');
		return $this->db->get();
	}

}
/* End of file m_kelola_bahan.php */
/* Location: ./application/models/kelola/m_kelola_bahan.php */