<?php
class Register_model extends CI_Model
{
    function insert($data)
    {
        $this->db->insert('user_register', $data);
        return $this->db->insert_id();
    }
    
    
}
