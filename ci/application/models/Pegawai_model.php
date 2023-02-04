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

    public  function hapusPegawai($id){
        $this->db->delete('pegawai', ['id' => $id]);
    }

    public function getPegawaiById($id){
        return $this->db->get_where('pegawai', ['id' => $id]) -> row_array();
    }

    public function editPegawai(){
        $data = [
            "nama" => $this->input->post('nama', true),
            "nip" => $this -> input ->post('nip', true),
            "email" => $this -> input ->post('email', true),
            "jurusan" => $this -> input ->post('jurusan')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pegawai', $data);
    }


    public function cariPegawai(){
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nip', $keyword);
        return $this->db->get('pegawai')->result_array();
    }
}


?>