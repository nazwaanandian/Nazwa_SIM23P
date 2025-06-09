<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pasien_model');
        $this->load->model('Status_model');
        $this->load->model('Dokter_model');
    }

   public function index() {
    $id_user = $this->session->userdata('id_user');
    $data['pasien'] = $this->Pasien_model->get_all_pasien_by_user($id_user);
    $this->load->view('templates/header');
    $this->load->view('pasien/index', $data);
    $this->load->view('templates/footer');
}


    public function tambah() {
        $this->load->model('Dokter_model');
        $data['dokter_pasien'] = $this->Dokter_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('pasien/form_pasien', $data);
        $this->load->view('templates/footer');
    }

    public function insert() {
        $data = [
            'nm_pasien' => $this->input->post('nm_pasien'),
            'dokter' => $this->input->post('dokter'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'keluhan' => $this->input->post('keluhan'),
            'tgl_kunjungan' => $this->input->post('tgl_kunjungan'),
            'status' => 'proses', // default
            'id_user' => $this->session->userdata('id_user') // ← simpan ID user login
        ];
        $this->Pasien_model->insert_pasien($data);
        redirect('pasien');
    }

    public function edit($idpasien) {
    $data['dokter_pasien'] = $this->Dokter_model->get_all();
    $data['pasien'] = $this->Pasien_model->get_pasien_by_id($idpasien);

    $this->load->view('templates/header');
    $this->load->view('pasien/edit_pasien', $data);
    $this->load->view('templates/footer');
}


    public function update($id) {
        $this->form_validation->set_rules('nm_pasien', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('dokter', 'Dokter', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
        $this->form_validation->set_rules('tgl_kunjungan', 'Tanggal Kunjungan', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->edit($id);
        } else {
            $data = [
                'nm_pasien' => $this->input->post('nm_pasien'),
                'dokter' => $this->input->post('dokter'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'keluhan' => $this->input->post('keluhan'),
                'tgl_kunjungan' => $this->input->post('tgl_kunjungan'),
                'status' => $this->input->post('status'),

            ];
            $this->Pasien_model->update_pasien($id, $data);
            $this->session->set_flashdata('success', 'Data berhasil diperbarui');
            redirect('pasien');
        }
    }

    public function hapus($idpasien) {
        $this->Pasien_model->delete_pasien($idpasien);
        redirect('pasien');
    }

    public function edit_status($idpasien) {
        if ($this->session->userdata('role') !== 'admin') {
            show_error('Akses ditolak. Hanya admin yang dapat mengubah status.', 403);
        }

        $data['idpasien'] = $idpasien;
        $data['status'] = $this->Pasien_model->get_status_by_id($idpasien);
        $data['status_pasien'] = $this->Pasien_model->get_status_pasien();

        $this->load->view('templates/header');
        $this->load->view('pasien/edit_status', $data);
        $this->load->view('templates/footer');
    }

    public function update_status($id) {
        $status_id = $this->input->post('status');
        $status_data = $this->db->get_where('status_pasien', ['idstatus' => $status_id])->row();

        if ($status_data) {
            $this->Pasien_model->update_pasien($id, ['status' => $status_data->status]);
            $this->session->set_flashdata('success', 'Status berhasil diperbarui');
        } else {
            $this->session->set_flashdata('error', 'Status tidak ditemukan');
        }

        redirect('pasien');
    }

    public function laporan() {
        $this->load->view('templates/header');
        $this->load->view('pasien/laporan_form');
        $this->load->view('templates/footer');
    }

    public function cetak_laporan() {
    $tanggal_dari = $this->input->post('tanggal_dari');
    $tanggal_sampai = $this->input->post('tanggal_sampai');

    $data['tanggal_dari'] = $tanggal_dari;
    $data['tanggal_sampai'] = $tanggal_sampai;
    $data['pasien'] = $this->Pasien_model->get_laporan_pasien($tanggal_dari, $tanggal_sampai);

    $this->load->view('templates/header');
    $this->load->view('pasien/laporan_hasil', $data);
    $this->load->view('templates/footer');
}


}
