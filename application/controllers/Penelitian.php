<?php

class Penelitian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penelitian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Penelitian';
        $data['tbl_penelitian'] = $this->Penelitian_model->getAllPenelitian();
        if ($this->input->post('keyword')) {
            $data['tbl_penelitian'] = $this->Penelitian_model->cariDataPenelitian();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('penelitian/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Penelitian';
        $data['waktu'] = ['2020-2021', '2021-2022', '2022-2023', '2023-2024', '2024-2025', '2025-2026'];

        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('topik', 'Topik', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('nama_mhs', 'Nama Mahasiswa', 'required');
        $this->form_validation->set_rules('nim_mhs', 'NIM Mahasiswa', 'required');
        $this->form_validation->set_rules('link', 'Link Publikasi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penelitian/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penelitian_model->tambahDataPenelitian();
            redirect('penelitian');
        }
    }

    public function hapus($id)
    {
        $this->Penelitian_model->hapusDataPenelitian($id);
        redirect('penelitian');
    }

    public function detail($id)
    {

        $data['judul'] = 'Detail Data Penelitian';
        $data['tbl_penelitian'] = $this->Penelitian_model->getPenelitianById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('penelitian/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Penelitian';
        $data['waktu'] = ['2020-2021', '2021-2022', '2022-2023', '2023-2024', '2024-2025', '2025-2026'];
        $data['tbl_penelitian'] = $this->Penelitian_model->getPenelitianById($id);


        $this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('topik', 'Topik', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('nama_mhs', 'Nama Mahasiswa', 'required');
        $this->form_validation->set_rules('nim_mhs', 'NIM Mahasiswa', 'required');
        $this->form_validation->set_rules('link', 'Link Publikasi', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penelitian/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penelitian_model->ubahDataPenelitian();
            redirect('penelitian');
        }
    }
}
