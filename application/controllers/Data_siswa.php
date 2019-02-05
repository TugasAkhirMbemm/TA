<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_siswa extends CI_Controller {

	function __construct()
    {
	parent::__construct();
      $this->load->model('data_model');
    	$this->load->model('core');
    }
	public function index()
	{
    $data['jenis_kel'] = $this->data_model->get_jenis_kelamin();
    $data['agama'] = $this->data_model->get_agama();
    $data['warga'] = $this->data_model->get_kewarganegaraan();
    $data['gol_darah'] = $this->data_model->get_gol_darah();
		$this->load->view('v_entri_data_siswa',$data);
	}
	public function t_entri_data_siswa(){
        if(isset($_POST['btnSimpan'])){
          $config = array('upload_path' => './gallery/Gambar_siswa/',
                  'allowed_types' => 'gif|jpg|png|jpeg'
                  );
          $this -> load -> library ('upload',$config);
          if ($this->upload->do_upload('gambar_siswa'))
        {
            $upload_data = $this -> upload -> data ();
            $nama_lengkap = $this -> input -> post('nama_lengkap');
            $nama_panggilan = $this -> input -> post('nama_panggilan');
            $tempat_lahir = $this -> input -> post('tempat_lahir');
            $tgl_lahir = $this -> input -> post('tgl_lahir');
            $usia = $this -> input -> post('usia');
            $jenis_kelamin = $this -> input -> post('jenis_kelamin');
            $agama = $this -> input -> post('agama');
            $kewarganegaraan = $this -> input -> post('kewarganegraan');
            $tinggal_bersama = $this -> input -> post('tinggal_bersama');
            $anak_ke = $this -> input -> post('anak_ke');
            $no_hp = $this -> input -> post('no_hp');
            $foto = "gallery/Gambar_siswa/".$upload_data['file_name'];
        $data = array(
        'nama_siswa' => $nama_lengkap,
        'nama_panggilan' => $nama_panggilan,
        'tempat_lahir_siswa' => $tempat_lahir,
        'tanggal_lahir_siswa' => $tgl_lahir,
        'usia_siswa' => $usia,
        'id_jenis_kelamin' => $jenis_kelamin,
        'id_agama' => $agama,
        'id_warganegara' => $kewarganegaraan,
        'tinggal_bersama_siswa' => $tinggal_bersama,
        'anak_ke_siswa' => $anak_ke,
        'no_telp_siswa' => $no_hp,
        'id_user' => 2,
        'id_status_diterima' => 3,
        'tempat_lahir_siswa' => $tempat_lahir,
        'gambar_siswa' => $foto        
        );
        $insert_data = $this->db->insert('siswa',$data);
      }
      if ($insert_data >= 0) {
        $this->session->set_flashdata("Pesan", $this->core->alert_succes("Data Berhasil di simpan"));
        redirect(base_url().'Data_siswa');
       }else{
        $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan"));
        redirect(base_url().'Data_siswa');
       }
    }else{
      $this->session->set_flashdata("Pesan", $this->core->alert_time("Data Gagal di simpan, cek gambar"));
    }
  }
}
