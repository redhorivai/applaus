<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lksauditor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Validasi User
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }
        $this->load->model('M_unitkerja');
    }

    public function index()
    {
        $data['datauk'] = $this->M_unitkerja->tampil_data()-> result();
        $data['dataau'] = $this->M_unitkerja->tampil_data1()-> result();
        $data['datalks'] = $this->M_unitkerja->tampil_data3()-> result();
        $data['dataiso'] = $this->M_unitkerja->tampil_data2()-> result();
        $this->load->view('admin/lksauditor_view',$data);

        if ($this->session->userdata('akses') == '1') {
            
        } else {
            echo "Anda Tidak Berhak Mengakses Halaman Ini!";
        }
        

    }
    public function simpanlks()
    {
        // $config['upload_path']          = './assets/lks/';
        // $config['allowed_types']        = '*';
        $config['upload_path']          = FCPATH.'/assets/lks/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('file'))
		{
            echo '<pre>';
            print_r($this->upload->display_errors());
            exit();
		} else {
        $datata=array(
                'id1'=>$this->input->post('id1'),
                'lks'=>$this->input->post('lks'),
                'tanggal'=>$this->input->post('tanggal'),
                'divisi'=>$this->input->post('divisi'),
                'ketua'=>$this->input->post('ketua'),
                'file' => $this->upload->data("file_name"),
                'uraian'=>$this->input->post('uraian'),
                'iso'=>$this->input->post('iso'),
                'klausul'=>$this->input->post('klausul'),
                'kategori'=>$this->input->post('kategori'),
                
        );//print_r($dataPengajar);
        $return_id=$this->M_unitkerja->insert($datata,'tb_lks');
        redirect('Admin/lksauditor');
        }
    }
   public function get_barang(){
        $id1=$this->input->post('id1');
        $data=$this->M_unitkerja->get_data_barang_bykode($id1);
        echo json_encode($data);
    }
    public function hapus_data($id)
    {
        $where = array ('id' => $id);
        $this->M_unitkerja->hapus_data($where, 'tb_lks');
        redirect ('admin/lksauditor');
    }
}
