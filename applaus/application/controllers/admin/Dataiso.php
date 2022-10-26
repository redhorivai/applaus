<?php 

class Dataiso extends CI_Controller
{
    public function __construct()
    {
    	parent::__construct();
    	if($this->session->userdata('masuk')!= TRUE){
    		$url = base_url('login');
    		redirect($url);
    	}
        $this->load->model('M_iso');
    }

    public function index()
    {
        $data['dataauditor'] = $this->M_iso->tampil_data()-> result();
        $this->load->view('admin/dataiso_view', $data);
    	if($this->session->userdata('akses') == '1'){
    	}
    	else {
    		echo "Anda Tidak Berhak Mengakses Halaman Ini!";
    	}
    }

    public function tambah_aksi()
    {
        $standar       = $this->input->post('judulstandar');
        $data = array(
            'judulstandar'          => $standar,
        );

        $this->M_iso->input_data($data, 'tb_standar');
        redirect('admin/Dataiso');
    }
    public function hapus_data($id)
    {
        $where = array ('id_standar' => $id);
        $this->M_iso->hapus_data($where, 'tb_standar');
        redirect ('admin/dataiso');
    }

    public function edit_data($id)
    {
        $where = array('id_standar' => $id);
        $data['dataiso'] = $this->M_iso->edit_data($where,'tb_standar')->result();
        $this->load->view('admin/_partials/header');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/editdataiso', $data);
        $this->load->view('admin/_partials/footer');
    }
        public function update($id)
    {
        $data=array(
                'judulstandar'=>$this->input->post('judulstandar'),

        );
        $this->M_iso->update($data,array('id_standar'=>$id),'tb_standar'); 
        redirect('Admin/dataiso/');
    }
}
