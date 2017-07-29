<?php
class Profilemodel extends CI_Model {
	public function updatepro(){
		$id = $this->session->userdata('user_id');
		$password = $this->input->post('password');
		$data = array('nama' => $this->input->post('nama'),
						'email' => $this->input->post('email'),
						'password' => md5($password)
						);
		$this->db->where('user_id', $id);
		return $this->db->update('user', $data);
	}
	public function selectPro() {
		$id = $this->session->userdata('user_id');
		$this->db->where('user_id', $id);
		return $this->db->get('user')->row();
	}	
}