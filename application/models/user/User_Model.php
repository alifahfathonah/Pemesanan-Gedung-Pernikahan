<?php
/**
* 
*/
class User_Model extends CI_Model {

	function insert($data) {
		$this->load->database();
		$this->db->insert('user', $data);
	}

	function update_data($user, $data) {
		$this->load->database();
		$this->db->where('username', $user);
		$this->db->update('user', $data);
	}

	function get_all_users() {
		$this->load->database();
		$this->db->select('*');
		$this->db->from('USER');
		return $this->db->get()->result_array();
	}

}