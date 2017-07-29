<?php
class Log_model extends CI_model {
	function log() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array('username'=>$username, 'password'=>md5($password));
		$cek = $this->db->get_where('user', $data)->row();
		$cek1 = $this->db->get_where('user', $data)->num_rows();
		if($cek1 > 0) {
				$data_session = array('username' => $cek->username,
										'user_id' => $cek->user_id,
										'nama' => $cek->nama,
										'email' => $cek->email,
										'level' => $cek->level,
										'status' => "login" );
			$this->session->set_userdata($data_session);
		}
	}
}