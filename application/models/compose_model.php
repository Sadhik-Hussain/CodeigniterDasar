<?php
class Compose_model extends CI_Model {
	public function selectAll() {
		$id = $this->session->userdata('user_id');
		$s = "1";
		$this->db->where('status', $s);
		$this->db->where('user_id', $id);
		return $this->db->get('surat')->result();
	}
	public function getId($q) {
		$id = $this->session->userdata('user_id');
		$this->db->like('nama_kontak', $q);
		$this->db->where('user_id', $id);
		$query = $this->db->get('kontak')->result();
        foreach ($query as $row){
        	$json_array[]=$row->id;
            $json_array[]=$row->nama_kontak;
        }
        echo json_encode($json_array);
	}
	public function cekcr() {
		$id = $this->session->userdata('user_id');
		$user = $this->db->where('user_id', $id);
		$q = $this->db->get('user')->row();
		return $q->credits;
	}
	public function add() {
		$user_id = $this->session->userdata('user_id');
		$this->db->where('user_id', $user_id);
		$user = $this->db->get('user')->row();
		$u = $user->credits;
		$cr = $u - "1";
		$data = array('credits' => $cr);
		$this->db->where('user_id', $user_id);
		$this->db->update('user', $data);


		$alamat = $this->input->post('alamat');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$datestring = '%Y-%m-%d';
		$now = time();
		$tgl = mdate($datestring, $now);
		$user_id = $this->session->userdata('user_id');
		$s = "1";
		$data = array('alamat' => $alamat,
						'judul' => $judul,
						'isi' => $isi,
						'tgl' => $tgl,
						'user_id' => $user_id,
						'status' => $s);
		$this->db->insert('surat', $data);
		$this->db->insert_id();
	}
}