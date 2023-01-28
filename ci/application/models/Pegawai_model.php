<?php 

class Pegawai_model extends CI_Model{
    public function getAllPegawai(){
        return $this->db->get('pegawai')->result_array();
    }

    public function tambahPegawai(){
        $data = [
            "nama" => $this->input->post('nama', true),
            "nip" => $this -> input ->post('nip', true),
            "email" => $this -> input ->post('email', true),
            "jurusan" => $this -> input ->post('jurusan')
        ];

        $this->db->insert('pegawai', $data);
    }
}


?>