<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PPDB extends CI_Controller {

	function __construct()
    {
	parent::__construct();
        $this->load->model('data_model');
    	$this->load->model('core');
    }
    public function index(){

    }
	public function Panduan(){
		$this->load->view('v_panduan');

	}
	public function Daftar_Siswa(){

		$data['jenjang']=$this->data_model->get_jenjang();
		$this->load->view('v_daftar_siswa',$data);
		
	}
	public function UploadPendaftaran(){
		$this->load->view('v_upload_bukti_pendaftaran');
	}
	public function upload_pndaftaran(){
        if(isset($_POST['btnSimpan'])){
          $config = array('upload_path' => './gallery/Bukti_pendaftaran/',
                  'allowed_types' => 'gif|jpg|png|jpeg'
                  );
          $this -> load -> library ('upload',$config);
          if ($this->upload->do_upload('gambar_bukti_pendaftaran'))
        {
            $upload_data = $this -> upload -> data ();
            $foto = "gallery/Bukti_pendaftaran/".$upload_data['file_name'];
        $data = array(
        'nama_bukti_gambar' => $foto
        );
        $insert_data = $this->db->insert('bukti_transaksi',$data);
      }
      if ($insert_data >= 0) {
        $this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil di simpan"));
        redirect(base_url().'PPDB/UploadPendaftaran');
       } else{
        $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan"));
        redirect(base_url().'PPDB/UploadPendaftaran');
       }
    }else{
      $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan, cek gambar"));
    }
  }
	public function UploadDaftarUlang(){
		$this->load->view('v_upload_bukti_daftarulang');
		
	}
	public function JadwalTestTK(){
		$data['jadwalTK'] = $this->data_model->get_jadwal_TK();
		$this->load->view('v_jadwal_test_tk',$data);
		
	}
	public function JadwalTestSD(){
		$data['jadwalSD'] = $this->data_model->get_jadwal_SD();
		$this->load->view('v_jadwal_test_sd',$data);
		
	}
	public function JadwalTestSMP(){
		$data['jadwalSMP'] = $this->data_model->get_jadwal_SMP();
		$this->load->view('v_jadwal_test_smp',$data);
		
	}
	public function Peng_Awal(){
		$this->load->view('v_peng_awal');
		
	}
	public function Peng_Akhir(){
		$this->load->view('v_peng_akhir');
		
	}
}
