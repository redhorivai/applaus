<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataunit extends CI_Controller
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
    public function tambah_aksi()
    {
        $direktorat       = $this->input->post('direktorat');
        $divisi  = $this->input->post('divisi');
        $departemen      = $this->input->post('departemen');
$jabatan    = $this->input->post('jabatan');
$kode_unit_penerbit     = $this->input->post('kode_unit_penerbit');
        $data = array( 
            'direktorat'          => $direktorat,
            'divisi'     => $divisi,
            'departemen'         => $departemen,
            'jabatan'         => $jabatan,
            'kodeunitpenerbit'         => $kode_unit_penerbit,
        );

        $this->M_unitkerja->input_data($data, 'tb_unitkerja');
        redirect('admin/Dataunit');
    }
    public function index()
    {
        $data['datauk'] = $this->M_unitkerja->tampil_data()-> result();
        $data['dataau'] = $this->M_unitkerja->tampil_data1()-> result();
        $data['datalks'] = $this->M_unitkerja->tampil_data3()-> result();
        $data['dataiso'] = $this->M_unitkerja->tampil_data2()-> result();
        $this->load->view('admin/dataunitkerja_view',$data);

        if ($this->session->userdata('akses') == '1') {
            
        } else {
            echo "Anda Tidak Berhak Mengakses Halaman Ini!";
        }
        

    }
    public function simpanlks()
    {
        $config['upload_path']          = './assets/lks/';
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        $upload = $this->upload->do_upload('file');
        $upload = $this->upload->data();
        $datata=array(
                'id1'=>$this->input->post('id1'),
                'lks'=>$this->input->post('lks'),
                'tanggal'=>$this->input->post('tanggal'),
                'divisi'=>$this->input->post('divisi'),
                'ketua'=>$this->input->post('ketua'),
                'file' => $upload['file_name'],
                'uraian'=>$this->input->post('uraian'),
                'iso'=>$this->input->post('iso'),
                'klausul'=>$this->input->post('klausul'),
                'kategori'=>$this->input->post('kategori'),
                
        );//print_r($dataPengajar);
        $return_id=$this->M_unitkerja->insert($datata,'tb_lks');
        redirect('Admin/lksauditor');
    }
   public function get_barang(){
        $id1=$this->input->post('id1');
        $data=$this->M_unitkerja->get_data_barang_bykode($id1);
        echo json_encode($data);
    }
    public function hapus_data($id)
    {
        $where = array ('id_unitkerja' => $id);
        $this->M_unitkerja->hapus_data($where, 'tb_unitkerja');
        redirect ('admin/dataunit');
    }
        public function edit_data($id)
    {
        $where = array('id_unitkerja' => $id);
        $data['dataunitkerja'] = $this->M_unitkerja->edit_data($where,'tb_unitkerja')->result();
        $this->load->view('admin/_partials/header');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/editdatakerja', $data);
        $this->load->view('admin/_partials/footer');
    }
        public function update($id)
    {
        $data = array( 
            'direktorat' =>$this->input->post('direktorat'),
            'divisi'    =>$this->input-> post('divisi'),
            'departemen'         =>$this->input-> post('departemen'),
            'jabatan'         =>$this->input-> post('jabatan'),
            'kodeunitpenerbit'         =>$this->input-> post('kode_unit_penerbit'),
        );
        $this->M_unitkerja->update($data,array('id_unitkerja'=>$id),'tb_unitkerja'); 
        redirect('Admin/dataunit/');
    }
}
