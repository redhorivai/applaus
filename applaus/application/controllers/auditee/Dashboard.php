<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Validasi User
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }
    }

    public function index()
    {
        if ($this->session->userdata('akses') == '3') {
            $this->load->view('auditee/dashboard_view');
        } else {
            echo "Anda Tidak Berhak Mengakses Halaman Ini!";
        }
    }
}
