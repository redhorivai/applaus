<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index()
	{
		$this->load->view('auth/login_view');
	}

	public function proses()
	{
		$email = htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

		$cek_admin = $this->auth_model->login_admin($email, $password);


		if ($cek_admin->num_rows() > 0) {
			$data = $cek_admin->row_array();
			$this->session->set_userdata('masuk', TRUE);
			if ($data['level'] == '1') { //Akses admin
				$this->session->set_userdata('akses', '1');
				$this->session->set_userdata('ses_id', $data['email']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('admin/dashboard');
			} elseif ($data['level'] == '2') { //akses auditor
				$this->session->set_userdata('akses', '2');
				$this->session->set_userdata('ses_id', $data['email']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('auditor/dashboard');
			} elseif ($data['level'] == '3') { //akses auditee
				$this->session->set_userdata('akses', '3');
				$this->session->set_userdata('ses_id', $data['email']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('auditee/dashboard');
			} else {
				$this->session->set_flashdata('error', 'Username & Password salah');
				redirect('login');
			}
		} else {

			$this->session->set_flashdata('error', 'Username & Password salah');
			redirect('login');
		}
	}

	public function logout()
	{

		$this->session->sess_destroy();
		$url = base_url('');
		redirect('login');
	}
}
