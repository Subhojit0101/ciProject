<?php

class RegisterModels extends CI_Model
{
    public function insert_user()
    {

        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'phone_no' => $this->input->post('phone_no')
        );

        return $this->db->insert('users', $data);
    }
}