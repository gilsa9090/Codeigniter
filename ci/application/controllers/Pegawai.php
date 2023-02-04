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
        if( $this->input->post('keyword')){
            $data['pegawai'] = $this->Pegawai_model->cariPegawai();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/index', $data);
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

    public  function hapus($id){
        $this->Pegawai_model->hapusPegawai($id);
        redirect('pegawai');
    }

    public function detail($id){
        $data['judul'] = 'Detail Data Pegawai';
        $data['pegawai'] = $this->Pegawai_model->getPegawaiById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('pegawai/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id){
        $data['pegawai'] = $this->Pegawai_model->getPegawaiById($id);
        $data['judul'] = 'Edit Karyawan';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if( $this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('pegawai/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pegawai_model->editPegawai();
            redirect('pegawai');
        }

    }

}

?>