<?php
class M_pos extends CI_Model{

	function get_data_barang_bykode($id1){
		$hsl=$this->db->query("SELECT * FROM tb_unitkerja WHERE id_unitkerja='$id1'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'id_unitkerja' => $data->id_unitkerja,
					'divisi' => $data->divisi,
					'kodeunitpenerbit' => $data->kodeunitpenerbit
					);
			}
		}
		return $hasil;
	}

}