<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_model extends CI_Model {

    public function select($table){
    return $this->db->get($table);
  }
    public function selectwhere($table,$data){
    return $this->db->get_where($table, $data);
  }

  function delete($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function update($table,$data,$where){
    $this->db->update($table,$data,$where);
  }

  public function insert($table,$data){
    $this->db->insert($table,$data);
  }

	public function get_jenjang(){
		$query = $this->db->query("SELECT * FROM jenjang ORDER BY id_jenjang ASC");
		return $query;
	}
	public function get_jadwal_TK(){
		$query = $this->db->query("SELECT * FROM jadwal_test WHERE id_jenjang = 1 ");
		return $query;
	}
	public function get_jadwal_SD(){
		$query = $this->db->query("SELECT * FROM jadwal_test WHERE id_jenjang = 2 ");
		return $query;
	}
	public function get_jadwal_SMP(){
		$query = $this->db->query("SELECT * FROM jadwal_test WHERE id_jenjang = 3 ");
		return $query;
	}						
}

