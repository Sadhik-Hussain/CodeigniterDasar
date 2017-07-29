<?php
class Usermodel extends CI_Model {
	public function selectAll() {
		return $this->db->get('user')->result();
	}
	public function add() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		$cr = "0";
		$data = array('username' => $username,
						'password' => md5($password),
						'nama' => $nama,
						'email' => $email,
						'level' => $level,
						'credits' => $cr);
		$this->db->insert('user', $data);
		$this->db->insert_id();
	}
	public function delete($id) {
		$this->db->delete('user', array('user_id' => $id));
	}
	public function edit($id) {
		$this->db->where('user_id', $id);
		return $this->db->get('user')->row();
	}
	public function update() {
		$id = $this->input->post('user_id');
		$data = array('username' => $this->input->post('username'),
						'password' => $this->input->post(md5('password')),
						'nama' => $this->input->post('nama'),
						'email' => $this->input->post('email'),
						'level' => $this->input->post('level'));
		$this->db->where('user_id', $id);
		$this->db->update('user', $data);
	}
}