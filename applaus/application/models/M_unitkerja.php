<?php

class M_unitkerja extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tb_unitkerja');
	}
		public function tampil_data1()
	{
		return $this->db->query("SELECT * FROM tb_auditor order by nama_auditor asc");
	}
		public function tampil_data2()
	{
		return $this->db->get('tb_standar');
	}
			public function tampil_data3()
	{
		return $this->db->get('tb_lks');
	}
	public function insert($data,$table)
        {
            $this->db->insert($table, $data);
            return $this->db->insert_id();
        }
          public function update($data,$where,$table)
        {
            $this->db->where($where);
            $this->db->update($table, $data);
        }
	 public function input_data($data){
 		$this->db->insert('tb_unitkerja', $data);
 	}
 	public function hapus_data($where, $table)
 	{
 		$this->db->where($where);
 		$this->db->delete($table);
 	}
 	 	public function edit_data($where, $table)
 	{
 		return $this->db->get_where($table, $where);
 	}

 	public function get_data_barang_bykode($id1){
		$hsl=$this->db->query("SELECT * FROM tb_unitkerja WHERE id='$id1'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'id' => $data->id,
					'divisi' => $data->divisi,
					);
			}
		}
		return $hasil;
	}

}