<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		

	$data = array(
			'success' => $this->session->flashdata('success'),
			'error' => $this->session->flashdata('error'),
			'jenjang' => $this->data_model->get_dataawal(),
	);
	
		$this->load->view('v_daftar_siswa', $data);
		}
		else{

		$this->load->view('headermhs');
		$this->load->view('home');
		$this->load->view('footer');
		}
		$this->load->view('v_daftar_akun');

	
}
