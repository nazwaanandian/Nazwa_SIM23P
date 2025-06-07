<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Status_model extends CI_Model{
    public function get_all_pasien(){
        return $this->db->get('pasien')->result_array();
    }
    public function insert_pasien($data){
        return $this->db->insert('pasien',$data);
    }
    public function delete_pasien($idpasien){
        return $this->db->delete('pasien',['idpasien'=>$idpasien]);
    }
    public function get_pasien_by_id($idpasien){
        return $this->db->get_where('pasien',['idpasien'=>$idpasien])->row_array();
    }
    public function update_pasien($id, $data){
        $this->db->where('idpasien', $id);
        return $this->db->update('pasien', $data);
    }
    
public function update_status($id, $status)
{
    return $this->db->where('idpasien', $id)->update('pasien', ['status' => $status]);
}


    public function get_laporan_berita($dari, $sampai)
    {
        $this->db->where('tanggal_publish >=', $dari);
        $this->db->where('tanggal_publish <=', $sampai);
        return $this->db->get('berita')->result();
    }
}