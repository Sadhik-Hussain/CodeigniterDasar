<?php
class Main extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('log_model');
		$this->load->model('kontak_model');
		$this->load->model('mailbox_model');
		$this->load->model('compose_model');
		$this->load->model('profilemodel');
		$this->load->model('creditmodel');
		$this->load->model('usermodel');
	}
	public function index() {
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('home');
			$this->load->view('template/footer');
		
	}
	public function login() {
		if($_POST==NULL) {
			$this->load->view('login');
		}else {
			$this->log_model->log();
			$q = $this->session->userdata('status');
			if($q == 'login'){
				redirect('index');
			}else{
				echo "<script>alert('Username/Password salah')
				  location.replace('index')</script>";
			}
		}
	}
	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('index'));
	}	
	public function profile() {
		if($_POST==NULL) {
			$data['pro'] = $this->profilemodel->selectPro();
			$data['cr'] = $this->creditmodel->selectAll();
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('profile', $data);
			$this->load->view('template/footer');
		}else {
			$this->profilemodel->updatepro();
			echo "<script>alert('Sukses')
				  location.replace('profile')</script>";
		}
	}
	public function phonebook() {
		$user_id = $this->session->userdata('level');
		if ($user_id == "Admin"){
			redirect(base_url('index'));
		}else {
			$data['kontak'] = $this->kontak_model->selectAll();
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('kontak',$data);
			$this->load->view('template/footer');
		}
	}
	public function phonebook_add() {
		$this->kontak_model->add1();
		echo json_encode(array("status" => TRUE));
	}
	public function phonebook_delete($id) {
		$this->kontak_model->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function phonebook_edit($id) {
		$data = $this->kontak_model->edit($id);
		echo json_encode($data);
	}
	public function phonebook_update() {
		$this->kontak_model->update1();
		echo json_encode(array("status" => TRUE));
	}
	public function mailbox() {
		$user_id = $this->session->userdata('level');
		if ($user_id == "Admin"){
			redirect(base_url('index'));
		}else {
			$data['surat'] = $this->mailbox_model->selectAll();
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('mailbox', $data);
			$this->load->view('template/footer');
		}
	}
	public function baca($id) {
		$user_id = $this->session->userdata('level');
		if ($user_id == "Admin"){
			redirect(base_url('index'));
		}else {
			$data['surat'] = $this->mailbox_model->getID($id);
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('baca', $data);
			$this->load->view('template/footer');
		}
	}
	public function compose() {
		$user_id = $this->session->userdata('level');
		if ($user_id == "Admin"){
			redirect(base_url('index'));
		}else {
			if($_POST==NULL) {
				$this->load->view('template/header');
				$this->load->view('template/menu');
				$this->load->view('compose');
				$this->load->view('template/footer');
			}else {
				$cek = $this->compose_model->cekcr();
				if($cek == '0'){
					echo "<script>alert('Credit 0')
				  	location.replace('compose')</script>";
				}else{
					$this->compose_model->add();
					redirect(base_url('sentbox'));
				}
			}
		}
	}
	public function searchCom() {
		$q = $this->input->get('term', true);
      	$this->compose_model->getId($q);
	}
	public function sentbox() {
		$user_id = $this->session->userdata('level');
		if ($user_id == "Admin"){
			redirect(base_url('index'));
		}else {
			$data['surat'] = $this->compose_model->selectAll();
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('sentbox', $data);
			$this->load->view('template/footer');
		}
	}
	public function paket() {
		$data['cr'] = $this->creditmodel->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('paket', $data);
		$this->load->view('template/footer');
	}
	public function paketadd() {
		$this->creditmodel->add();
		echo json_encode(array("status" => TRUE));
	}
	public function paketdelete($id) {
		$this->creditmodel->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function paketedit($id) {
		$data = $this->creditmodel->edit($id);
		echo json_encode($data);
	}
	public function paketupdate() {
		$this->creditmodel->update();
		echo json_encode(array("status" => TRUE));
	}
	public function user() {
		$user_id = $this->session->userdata('level');
		if ($user_id == "Member"){
			redirect(base_url('index'));
		}else {
			$data['user'] = $this->usermodel->selectAll();
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('user', $data);
			$this->load->view('template/footer');
		}
	}
	public function useradd() {
		$this->usermodel->add();
		echo json_encode(array("status" => TRUE));
	}
	public function userdelete($id) {
		$this->usermodel->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function useredit($id) {
		$data = $this->usermodel->edit($id);
		echo json_encode($data);
	}
	public function userupdate() {
		$this->usermodel->update();
		echo json_encode(array("status" => TRUE));
	}
	public function invoice() {
		$user_id = $this->session->userdata('level');
		if ($user_id == "Admin"){
			redirect(base_url('index'));
		}else {
			if($_POST==NULL) {
				echo "<script>alert('Pembelian Gagal')
				  location.replace('profile')</script>";
			} else {
				$this->creditmodel->buy();
				$data['user'] = $this->creditmodel->invoice1();
				$data['paket'] = $this->creditmodel->invoice2();
				$this->load->view('template/header');
				$this->load->view('template/menu');
				$this->load->view('invoice', $data);
				$this->load->view('template/footer');
			}
		}
	}
}