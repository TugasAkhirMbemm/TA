<?php
/**
 * 
 */
class Data_kemampuan extends CI_Controller
{
	
	function __construct()
	{
	parent::__construct();
      	$this->load->model('data_model');
    	$this->load->model('core');
	}
	public function index(){

	}
	public function t_entri_kemampuan_anak(){
		if (isset($_POST['btnSimpan'])) {
			$jawaban = $this -> input -> post('jawaban_kemampuan');
			$data = array(
				'id_siswa' => 2 ,
				'id_jawaban_kemampuan_anak' => $jawaban 
			);
			$insert_data = $this->db->insert('kemampuan_anak',$data);

			if ($insert_data >= 0) {
		      	$this->session->set_flashdata("Pesan",$this->core->alert_succes("Data Berhasil di simpan"));
		        header('location:'.base_url("Data_siswa"));
		       } else{
		       $this->session->set_flashdata("Pesan",$this->core->alert_time("Data Gagal di simpan"));
		       header('location:'.base_url("Data_siswa"));
		       }
		    }else{
		      echo "gagal";
		    }
		}
	}