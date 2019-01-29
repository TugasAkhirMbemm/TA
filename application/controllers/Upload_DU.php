<?php
/**
 * 
 */
class Upload_DU extends CI_Controller {

	function __construct()
    {
	parent::__construct();
        $this->load->model('data_model');
    	$this->load->model('core');
    }
    public function index(){

    }
   	public function UploadDaftarUlang(){
		$this->load->view('v_upload_bukti_daftarulang');
		
	}
}