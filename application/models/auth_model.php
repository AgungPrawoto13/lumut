<?php

class auth_model extends CI_Model{

	public function get_user($user)
    {
        $query = $this->db->get_where('account', array('username' => $user));
        return $query->result_array();
    }

    public function get_all_user()
    {
    	return $this->db->get('account')->result_array();
    }
}