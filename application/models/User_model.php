<?php

class User_model extends CI_Model {

    public function insert_user($data){
        return $this->db->insert('users', $data);
    }
public function check_user($username, $password)
{
    $this->db->where('username', $username);
    $query = $this->db->get('users');
    $user = $query->row();

    if ($user && password_verify($password, $user->password)) {
        return $user;
    } else {
        return false;
    }
}

}