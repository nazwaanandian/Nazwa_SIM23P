<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class pasien extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Pasien_model');
    }
    public function index(){

        $data['pasien']=$this->Pasien_model->get_all_pasien();
       
        $this->load->view('templates/header');
        $this->load->view('pasien/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $this->load->model('Dokter_model');
        $data['dokter_pasien'] = $this->Dokter_model->get_all();
        $data['pasien']=$this->Pasien_model->get_all_pasien();
       
        $this->load->view('templates/header');
        $this->load->view('pasien/form_pasien',$data);
        $this->load->view('templates/footer');
    }
    public function insert(){
    $nm_pasien=$this->input->post('nm_pasien');
    $dokter=$this->input->post('dokter');
    $tgl_lahir=$this->input->post('tgl_lahir');
    $alamat=$this->input->post('alamat');
    $no_telp=$this->input->post('no_telp');
    $keluhan=$this->input->post('keluhan');
    $tgl_kunjungan=$this->input->post('tgl_kunjungan');


    $data=array(
        'nm_pasien'=>$nm_pasien,
        'dokter'=>$dokter,
        'tgl_lahir'=>$tgl_lahir,
        'alamat'=>$alamat,
        'no_telp'=>$no_telp,
        'keluhan'=>$keluhan,
        'tgl_kunjungan'=>$tgl_kunjungan,
    );

    $result=$this->Pasien_model->insert_pasien($data);

    if($result){
        $this->session->set_flashdata('success','Data berhasil disimpan');
        redirect('pasien');
    }else{
        $this->session->set_flashdata('error','Data gagal disimpan');
        redirect('pasien');
    }
}
    public function hapus($idpasien){
        $this->Pasien_model->delete_pasien($idpasien);
        redirect('pasien');
    }
    public function edit($idpasien){
        $data['pasien']=$this->Pasien_model->get_pasien_by_id($idpasien);
        
        $this->load->view('templates/header');
        $this->load->view('pasien/edit_pasien',$data);
        $this->load->view('templates/footer');
    }
    public function update($id){
        $this->form_validation->set_rules('nm_pasien','nm_pasien','required');
        $this->form_validation->set_rules('dokter','dokter','required');
        $this->form_validation->set_rules('tgl_lahir','tgl_lahir','required');
        $this->form_validation->set_rules('alamat','alamat','required');
        $this->form_validation->set_rules('no_telp','no_telp','required');
        $this->form_validation->set_rules('keluhan','keluhan','required');
        $this->form_validation->set_rules('tgl_kunjungan','tgl_kunjungan','required');
        if ($this->form_validation->run() === FALSE){
            $this->index($id);
        }else{
            $data = [
                'nm_pasien' => $this->input->post('nm_pasien'),
                'dokter' => $this->input->post('dokter'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'keluhan' => $this->input->post('keluhan'),
                'tgl_kunjungan' => $this->input->post('tgl_kunjungan'),

            ];
        
        $this->Pasien_model->update_pasien($id, $data);
        redirect('pasien');
        }
    }
   



    public function laporan()
    {
        $this->load->view('templates/header');
        $this->load->view('berita/laporan_form');
        $this->load->view('templates/footer');
    }

    public function cetak_laporan()
    {
        $tanggal_dari = $this->input->post('tanggal_dari');
        $tanggal_sampai = $this->input->post('tanggal_sampai');

        $data['berita'] = $this->Berita_model->get_laporan_berita($tanggal_dari, $tanggal_sampai);
        $data['tanggal_dari'] = $tanggal_dari;
        $data['tanggal_sampai'] = $tanggal_sampai;
        // print_r($data);
        $this->load->view('templates/header');
        $this->load->view('berita/laporan_hasil', $data);
        $this->load->view('templates/footer');
    }
    
}
