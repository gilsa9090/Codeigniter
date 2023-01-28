<?php 

class Pegawai extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
        $this->load->library('form_validation');
    }


    public function index(){
        $data['judul'] = 'Daftar Pegawai';
        $data['pegawai'] = $this->Pegawai_model->getAllPegawai();
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/index');
        $this->load->view('templates/footer');
    }

    public function insert(){
        $data['judul'] = 'Tambah Karyawan';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if( $this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('pegawai/insert');
            $this->load->view('templates/footer');
        } else {
            $this->Pegawai_model->tambahPegawai();
            redirect('pegawai');
        }

    }
}

?>