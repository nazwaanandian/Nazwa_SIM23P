<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_pasien extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('HomePasien_model');
    }

    public function index()
    {
        $data['pasien'] = $this->HomePasien_model->get_all();
        $this->load->view('layouts/header'); // bagian header AdminLTE
        $this->load->view('home/index', $data); // konten berita
        $this->load->view('layouts/footer'); // bagian footer AdminLTE
    }
    public function detail($id)
{
    $this->load->model('HomePasien_model');
    $data['pasien'] = $this->HomePasien_model->get_by_id($id);

    if (!$data['pasien']) {
        show_404(); //Jika ID tidak ditemukan
    }
    $this->load->view('layouts/header');
    $this->load->view('home/detail', $data);
    $this->load->view('layouts/footer');
}
}
