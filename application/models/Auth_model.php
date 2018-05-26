<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * 
     */

    public function Authentification() {
        $notif = array();
        $email = $this->input->post('email');
        $password =  $this->input->post('password');

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            $row = $query->row();
 
                $sess_data = array(
                    'users_id' => $row->id,
                    'first_name' => $row->name,
                    'role' => $row->role,
                    'email' => $row->email
                );
                $this->session->set_userdata('logged_in', $sess_data);
                $this->update_last_login($row->users_id);
        } else {
            $notif['message'] = 'Username or password incorrect !';
            $notif['type'] = 'danger';
        }

        return $notif;
    }

    /*
     * 
     */

    private function update_last_login($users_id) {
        $sql = "UPDATE user SET update_at = NOW() WHERE id=" . $this->db->escape($users_id);
        $this->db->query($sql);
    }

    /*
     * 
     */

    public function register() {
        $notif = array();
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'password' => Utils::hash('sha1', $this->input->post('password'), AUTH_SALT),
            'is_active' => $this->input->post('is_active') ? : 0
        );
        $this->db->insert('users', $data);
        $users_id = $this->db->insert_id();
        if ($this->db->affected_rows() > 0) {
            $notif['message'] = 'Saved successfully';
            $notif['type'] = 'success';
            unset($_POST);
        } else {
            $notif['message'] = 'Something wrong !';
            $notif['type'] = 'danger';
        }
        return $notif;
    }

    /*
     * 
     */

    public function check_email($email) {
        $sql = "SELECT * FROM users WHERE email = " . $this->db->escape($email);
        $res = $this->db->query($sql);
        if ($res->num_rows() > 0) {
            $row = $res->row();
            return $row;
        }
        return null;
    }

}
