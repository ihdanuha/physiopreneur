<?php

class M_Pasien extends CI_Model{
	
	/*function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}*/
	
	function tambah_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function tampil_data($idPasien){
		$this->db->where('id', $idPasien);
		$ambildata = $this->db->get('tb_pasien');
		if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
	
}

?>