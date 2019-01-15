<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_model extends CI_Model {

public function get_dataawal(){
	$query = $this->db->query("SELECT * FROM jenjang");
	 	return $query->result();
	}			
	}

		 }
