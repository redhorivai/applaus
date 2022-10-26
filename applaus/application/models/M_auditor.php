<?php

class M_auditor extends CI_Model
{
	public function tampil_data()
	{
		$query = $this->db->table('tb_auditor');
		$query->select('*');
		$query->where('status_cd', 'normal');
		$query->orderBy('artikel_id', 'DESC');
		$return = $query->get();
		return $return->getResult();
		// $this->select(*);
		// $this->db->where('status_cd', 'normal');
		// return $this->db->get('tb_auditor');
	}
	public function input_data($data)
	{
		$this->db->insert('tb_auditor', $data);
	}
	// public function hapus_data($where, $table)
	// {
	// 	$this->db->where($where);
	// 	$this->db->delete($table);
	// }

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update($data, $where, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	// public function edit_hapus($data, $where, $table)
	// {
	// 	$this->db->where($where);
	// 	$this->db->where('status_cd' = 'nullified');
	// 	$this->db->update($table, $data);
	// }
}
