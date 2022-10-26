<?php
class Pos extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pos');
	}
	function index(){
		$this->load->view('v_pos');
	}

	function get_barang(){
		$id1=$this->input->post('id1');
		$data=$this->m_pos->get_data_barang_bykode($id1);
		echo json_encode($data);
	}
}