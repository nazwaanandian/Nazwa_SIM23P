<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Status_model extends CI_Model{
    public function get_all_status(){
        return $this->db->get('status_pasien')->result_array();
    }
    public function get_all(){
        return $this->db->get('status_pasien')->result();
    }
    public function insert_status($data){
        return $this->db->insert('status_pasien',$data);
    }
    public function delete_status($idstatus){
        return $this->db->delete('status_pasien',['idstatus'=>$idstatus]);
    }
    public function get_status_by_id($idstatus){
        return $this->db->get_where('status_pasien',['idstatus'=>$idstatus])->row_array();
    }
    public function update_status($id, $data){
        $this->db->where('idstatus', $id);
        return $this->db->update('status_pasien', $data);
    }
}