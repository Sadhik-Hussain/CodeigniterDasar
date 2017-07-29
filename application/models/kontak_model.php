<?php
class Kontak_model extends CI_Model {

	public function selectAll() {
		$id = $this->session->userdata('user_id');
		$this->db->where('user_id', $id);
		return $this->db->get('kontak')->result();

	}
	public function add1() {
		$nama_kontak = $this->input->post('nama_kontak');
		$telp = $this->input->post('telp');
		$user_id = $this->session->userdata('user_id');
		$data = array('nama_kontak' => $nama_kontak,'telp' => $telp,'user_id' => $user_id);
		$this->db->insert('kontak', $data);
		$this->db->insert_id();
	}
	public function delete($id){
		$this->db->delete('kontak', array('id' => $id));
	}
	public function edit($id){
		$this->db->where('id', $id);
		return $this->db->get('kontak')->row();
	}
	public function update1(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$data = array('nama_kontak' => $this->input->post('nama_kontak'),
						'telp' => $this->input->post('telp')
						);
		$this->db->update('kontak', $data);
	}
}