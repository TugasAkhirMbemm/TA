<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PPDB extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	public function Panduan(){
		$this->load->view('v_panduan');

	}
	public function Daftar(){
		$this->load->view('v_daftar_siswa');
		
	}
	public function UploadPendaftaran(){
		$this->load->view('v_upload_bukti_pendaftaran');
		
	}
	public function UploadDaftarUlang(){
		$this->load->view('v_upload_bukti_daftarulang');
		
	}
	public function JadwalTestTK(){
		$this->load->view('v_jadwal_test_tk');
		
	}
	public function JadwalTestSD(){
		$this->load->view('v_jadwal_test_sd');
		
	}
	public function JadwalTestSMP(){
		$this->load->view('v_jadwal_test_smp');
		
	}
	public function Peng_Awal(){
		$this->load->view('v_peng_awal');
		
	}
	public function Peng_Akhir(){
		$this->load->view('v_peng_akhir');
		
	}
}
