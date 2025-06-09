<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class status extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Status_model');
    }
    public function index(){

        $data['status_pasien']=$this->Status_model->get_all_status();
        $this->load->view('templates/header');
        $this->load->view('status/index',$data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['status_pasien']=$this->Status_model->get_all_status();
        $this->load->view('templates/header');
        $this->load->view('status/form_status',$data);
        $this->load->view('templates/footer');
    }
    public function insert(){
    $dokter=$this->input->post('status');
   

    $data=array(
    
        'status'=>$status,
       
    );

    $result=$this->Status_model->insert_status($data);

    if($result){
        $this->session->set_flashdata('success','Status berhasil disimpan');
        redirect('status');
    }else{
        $this->session->set_flashdata('error','Status gagal disimpan');
        redirect('status');
    }
}
    public function hapus($idstatus){
        $this->Status_model->delete_status($idstatus);
        redirect('status');
    }
    public function edit($idstatus){
        $data['status_pasien']=$this->Status_model->get_status_by_id($idstatus);
        $this->load->view('templates/header');
        $this->load->view('status/edit_status',$data);
        $this->load->view('templates/footer');
    }
    public function update($id){
        
        $this->form_validation->set_rules('status','status','required');
        
        if ($this->form_validation->run() === FALSE){
            $this->index($id);
        }else{
            $data = [
              
                'status' => $this->input->post('status')
             
            ];
        
        $this->Status_model->update_status($id, $data);
        redirect('status');
        }
    }
}