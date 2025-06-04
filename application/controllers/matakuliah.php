<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Matakuliah_model');
    }

    public function index() {
        $data['matakuliah'] = $this->Matakuliah_model->get_all_matakuliah();
        $this->load->view('templates/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $this->load->view('templates/header');
        $this->load->view('matakuliah/form_matakuliah');
        $this->load->view('templates/footer');
    }

    public function insert() {
        $data = array(
            'kode_matkul' => $this->input->post('kode_matkul'),
            'nama_matkul' => $this->input->post('nama_matkul'),
            'sks' => $this->input->post('sks'),
            'semester' => $this->input->post('semester'),
            'jenis' => $this->input->post('jenis'),
            'prodi' => $this->input->post('prodi')
        );

        if ($this->Matakuliah_model->insert_matakuliah($data)) {
            $this->session->set_flashdata('success', 'Mata kuliah berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('error', 'Gagal menambahkan mata kuliah');
        }
        redirect('matakuliah');
    }

    public function edit($kode_matkul) {
        $data['matakuliah'] = $this->Matakuliah_model->get_matakuliah_by_kode($kode_matkul);
        $this->load->view('templates/header');
        $this->load->view('matakuliah/edit_matakuliah', $data);
        $this->load->view('templates/footer');
    }

    public function update($kode_matkul) {
        $data = array(
            'kode_matkul' => $this->input->post('kode_matkul'),
            'nama_matkul' => $this->input->post('nama_matkul'),
            'sks' => $this->input->post('sks'),
            'semester' => $this->input->post('semester'),
            'jenis' => $this->input->post('jenis'),
            'prodi' => $this->input->post('prodi')
        );

        if ($this->Matakuliah_model->update_matakuliah($kode_matkul, $data)) {
            $this->session->set_flashdata('success', 'Mata kuliah berhasil diperbarui');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui mata kuliah');
        }
        redirect('matakuliah');
    }

    public function hapus($kode_matkul) {
        if ($this->Matakuliah_model->delete_matakuliah($kode_matkul)) {
            $this->session->set_flashdata('success', 'Mata kuliah berhasil dihapus');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus mata kuliah');
        }
        redirect('matakuliah');
    }
}
