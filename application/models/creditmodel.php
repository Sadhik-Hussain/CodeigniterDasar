<?php
class Creditmodel extends CI_Model {
	public function selectAll() {
		return $this->db->get('paket')->result();
	}
	public function add() {
		$nama_paket = $this->input->post('nama_paket');
		$jumlah = $this->input->post('jumlah');
		$harga = $this->input->post('harga');
		$data = array('nama_paket' => $nama_paket,
						'jumlah' => $jumlah,
						'harga' => $harga);
		$this->db->insert('paket', $data);
		$this->db->insert_id();
	}
	public function delete($id) {
		$this->db->delete('paket', array('id' => $id));
	}
	public function edit($id) {
		$this->db->where('id', $id);
		return $this->db->get('paket')->row();
	}
	public function update() {
		$id = $this->input->post('id');
		$data = array('nama_paket' => $this->input->post('nama_paket'),
						'jumlah' => $this->input->post('jumlah'),
						'harga' => $this->input->post('harga'));
		$this->db->where('id', $id);
		$this->db->update('paket', $data);
	}
	public function buy() {
		$user_id = $this->session->userdata('user_id');
		$this->db->where('user_id', $user_id);
		$user = $this->db->get('user')->row();
		$u = $user->credits;

		$paket = $this->input->post('paket');
		$this->db->where('id', $paket);
		$row = $this->db->get('paket')->row();
		$c = $row->jumlah;

		$cr = $u + $c;
		$datestring = '%Y-%m-%d';
		$now = time();
		$tgl = mdate($datestring, $now);
		
		$arr = array('user_id' => $user_id,
					'paket_id' => $paket,
					'tgl' => $tgl);
		$this->db->insert('riwayat', $arr);
		$this->db->insert_id();
		$data = array('credits' => $cr);
		$this->db->where('user_id', $user_id);
		$this->db->update('user', $data);
	}
	public function invoice1() {
		$user_id = $this->session->userdata('user_id');
		$this->db->where('user_id', $user_id);
		return $this->db->get('user')->row();
	}
	public function invoice2() {
		$paket = $this->input->post('paket');
		$this->db->where('id', $paket);
		return $this->db->get('paket')->row();
	}
}