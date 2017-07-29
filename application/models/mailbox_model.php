<?php
class Mailbox_model extends CI_Model {

	public function selectAll() {
		$id = $this->session->userdata('user_id');
		$s = "0";
		$this->db->where('status', $s);
		$this->db->where('user_id', $id);
		return $this->db->get('surat')->result();
	}
	public function getID($id){
		$this->db->where('id', $id);
		return $this->db->get('surat')->row();
	}
}