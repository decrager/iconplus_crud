<?php 

class Keuangan_m extends CI_Model {

	public function getData()
	{
		return $this->db->get('keuangan');
	}

	public function inputData($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function editData($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function updateData($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function deleteData($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
