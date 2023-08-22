<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function hapusDataUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function editDataUser()
    {
        $data = [
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'image' => $this->input->post('image', true),
            'password' => $this->input->post('password', true),
            'is_active' => $this->input->post('is_active', true),
            'date_created' => $this->input->post('date_created', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }


    public function hapusDataRole($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');
    }

    public function getRoleById($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }

    public function editDataRole()
    {
        $data['role'] = $this->input->post('role', true);

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_role', $data);
    }
}
