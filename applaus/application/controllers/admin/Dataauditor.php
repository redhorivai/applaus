<?php

class Dataauditor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }
        $this->load->model('M_auditor');
    }

    public function index()
    {
        $data['dataauditor'] = $this->M_auditor->tampil_data()->result();
        $this->load->view('admin/dataauditor_view', $data);
        if ($this->session->userdata('akses') == '1') {
        } else {
            echo "Anda Tidak Berhak Mengakses Halaman Ini!";
        }
    }
    public function update($id_auditor)
    {
        $dataauditor = array(
            'nama_auditor' => $this->input->post('nama_auditor'),
            'unitkerja' => $this->input->post('unitkerja'),
            'status' => $this->input->post('status'),

        );
        $this->M_auditor->update($dataauditor, array('id_auditor' => $id_auditor), 'tb_auditor');
        redirect('Admin/dataauditor/');
    }
    public function tambah_aksi()
    {
        $nama       = $this->input->post('nama_auditor');
        $unitkerja  = $this->input->post('unitkerja');
        $status      = $this->input->post('status');

        $data = array(
            'nama_auditor'          => $nama,
            'unitkerja'     => $unitkerja,
            'status'         => $status,
        );

        $this->M_auditor->input_data($data, 'tb_auditor');
        redirect('admin/Dataauditor');
    }
    public function edit_hapus($id)
    {
        $where = array('Id_auditor' => $id);
        $this->M_auditor->edit_hapus($where, 'tb_auditor');
        redirect('admin/dataauditor');
    }

    public function edit_data($id_auditor)
    {
        $where = array('id_auditor' => $id_auditor);
        $data['dataauditor'] = $this->M_auditor->edit_data($where, 'tb_auditor')->result();
        $this->load->view('admin/_partials/header');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/editdata', $data);
        $this->load->view('admin/_partials/footer');
    }
}
