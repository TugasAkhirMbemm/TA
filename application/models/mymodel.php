<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {

  function __construct(){
        parent::__construct();
    }

  public function select($table){
    return $this->db->get($table);
  }

  public function selectwhere($table,$data){
    return $this->db->get_where($table, $data);
  }

  function delete($table,$data){
    $this->db->delete($table, $data);
  }

  function update($table,$data,$where){
    $this->db->update($table,$data,$where);
  }

  function insert($table,$data){
    $this->db->insert($table,$data);
  }

  function selectjoin($clause){
        $this->db->where($clause);
        return $this->db->get("siswa");
    }

    // cek login di login form
  function ceklogin($username, $password){
      $this->db->where('username_admin', $username);
      $this->db->where('password_admin', $password);
      return $this->db->get('admin')->row();
    }
    // end of cek login di login form


  function selectsiswafornilaitk(){
      $this->db->select('nilai_psikotes.*, siswa.*, user.*');
      $this->db->join('nilai_psikotes', 'siswa.id_siswa = nilai_psikotes.id_siswa');
      $this->db->join('user', 'siswa.id_user = user.id_user');
      $this->db->from('siswa');
      $this->db->where('user.id_jenjang', '1');
      $data=$this->db->get();
      return $data;
    }

    function selectsiswafornilaisd(){
        $this->db->select('nilai_tes.*, nilai_psikotes.*, siswa.*, user.*');
        $this->db->join('nilai_tes', 'siswa.id_siswa = nilai_tes.id_siswa');
        $this->db->join('nilai_psikotes', 'siswa.id_siswa = nilai_psikotes.id_siswa');
        $this->db->join('user', 'siswa.id_user = user.id_user');
        $this->db->from('siswa');
        $this->db->where('user.id_jenjang', '2');
        $data=$this->db->get();
        return $data;
      }

      function selectsiswafornilaismp(){
          $this->db->select('nilai_tes.*, siswa.*, user.*');
          $this->db->join('nilai_tes', 'siswa.id_siswa = nilai_tes.id_siswa');
          $this->db->join('user', 'siswa.id_user = user.id_user');
          $this->db->from('siswa');
          $this->db->where('user.id_jenjang', '3');
          $data=$this->db->get();
          return $data;
        }

      function edit_verifikasi_semua_jenjang($no_id, $table){
          $return = $this->db->get_where($table, $no_id);
          return $return->result();
      }

// tampilan petugas admin sekretaris
      function petugas1(){
        $this->db->select('admin.*, admin_level.*, jenis_kelamin.*');
        $this->db->join('admin_level', 'admin.id_level = admin_level.id_level');
        $this->db->join('jenis_kelamin', 'admin.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin');
        $this->db->from('admin');
        $data = $this->db->get();
        return $data;
      }
// end of tampilan petugas admin sekretaris

// tampilan data siswa tk admin sekretaris
      function siswatk1(){
        $this->db->select('siswa.*, user.*, jenis_kelamin.*, status_diterima.*');
        $this->db->join('user', 'siswa.id_user = user.id_user');
        $this->db->join('jenis_kelamin', 'siswa.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin');
        $this->db->join('status_diterima', 'siswa.id_status_diterima = status_diterima.id_status_diterima');
        $this->db->from('siswa');
        $this->db->where('user.id_jenjang', '1');
        $data=$this->db->get();
        return $data;
      }
// end of tampilan data siswa tk admin sekretaris

// tampilan data siswa sd admin sekretaris
      function siswasd1(){
        $this->db->select('siswa.*, user.*, jenis_kelamin.*, status_diterima.*');
        $this->db->join('user', 'siswa.id_user = user.id_user');
        $this->db->join('jenis_kelamin', 'siswa.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin');
        $this->db->join('status_diterima', 'siswa.id_status_diterima = status_diterima.id_status_diterima');
        $this->db->from('siswa');
        $this->db->where('user.id_jenjang', '2');
        $data=$this->db->get();
        return $data;
      }
// end of tampilan data siswa sd admin sekretaris

// tampilan data siswa sd admin sekretaris
      function siswasmp1(){
        $this->db->select('siswa.*, user.*, jenis_kelamin.*, status_diterima.*');
        $this->db->join('user', 'siswa.id_user = user.id_user');
        $this->db->join('jenis_kelamin', 'siswa.id_jenis_kelamin = jenis_kelamin.id_jenis_kelamin');
        $this->db->join('status_diterima', 'siswa.id_status_diterima = status_diterima.id_status_diterima');
        $this->db->from('siswa');
        $this->db->where('user.id_jenjang', '3');
        $data=$this->db->get();
        return $data;
      }
// end of tampilan data siswa sd admin sekretaris

//tampilan pengumuman
      function pengumumantk(){
        $this->db->select('user.*, siswa.*, pendaftaran_baru.*');
        $this->db->join('siswa', 'user.id_user = siswa.id_user');
        $this->db->join('pendaftaran_baru', 'user.id_user = pendaftaran_baru.id_user ');
        $this->db->from('user');
        $this->db->where('user.id_jenjang', '1');
        $data=$this->db->get();
        return $data;
      }

      function pengumumansd(){
        $this->db->select('siswa.*, user.*, pendaftaran_baru.*');
        $this->db->join('user', 'siswa.id_user = user.id_user');
        $this->db->join('pendaftaran_baru', 'user.id_user = pendaftaran_baru.id_user ');
        $this->db->from('siswa');
        $this->db->where('user.id_jenjang', '2');
        $data=$this->db->get();
        return $data;
      }

      function pengumumansmp(){
        $this->db->select('siswa.*, user.*, pendaftaran_baru.*');
        $this->db->join('user', 'siswa.id_user = user.id_user');
        $this->db->join('pendaftaran_baru', 'user.id_user = pendaftaran_baru.id_user ');
        $this->db->from('siswa');
        $this->db->where('user.id_jenjang', '3');
        $data=$this->db->get();
        return $data;
      }
//tampilan pengumuman

//tampilan verifikasi
      function tampilverifikasitk(){
        $this->db->select('siswa.*, user.*, pendaftaran_ulang.*');
        $this->db->join('user', 'siswa.id_user = user.id_user');
        $this->db->join('pendaftaran_ulang', 'pendaftaran_ulang.id_user = user.id_user ');
        $this->db->from('siswa');
        $this->db->where('user.id_jenjang', '1');
        $data=$this->db->get();
        return $data;
      }

      function tampilverifikasisd(){
        $this->db->select('siswa.*, user.*, pendaftaran_ulang.*');
        $this->db->join('user', 'siswa.id_user = user.id_user');
        $this->db->join('pendaftaran_ulang', 'pendaftaran_ulang.id_user = user.id_user ');
        $this->db->from('siswa');
        $this->db->where('user.id_jenjang', '2');
        $data=$this->db->get();
        return $data;
      }

      function tampilverifikasismp(){
        $this->db->select('siswa.*, user.*, pendaftaran_ulang.*');
        $this->db->join('user', 'siswa.id_user = user.id_user');
        $this->db->join('pendaftaran_ulang', 'user.id_user = pendaftaran_ulang.id_user ');
        $this->db->from('siswa');
        $this->db->where('user.id_jenjang', '3');
        $data=$this->db->get();
        return $data;
      }

//tampilan verifikasi

      function verifikasi_awal($id){
        $this->db->select('pendaftaran_baru.*, user.*, siswa.*, bukti_transaksi.*');
        $this->db->join('siswa', 'user.id_user = siswa.id_user');
        $this->db->join('pendaftaran_baru', 'user.id_user = pendaftaran_baru.id_user ');
        $this->db->join('bukti_transaksi', 'user.id_user = bukti_transaksi.id_user');
        $this->db->from('user');
        $this->db->where('user.id_user', $id);
        $data=$this->db->get();
        return $data;
      }

      function verifikasi_ulang($id){
        $this->db->select('siswa.*, user.*, pendaftaran_ulang.*');
        $this->db->join('siswa', 'user.id_user = siswa.id_user');
        $this->db->join('pendaftaran_ulang', 'user.id_user = pendaftaran_ulang.id_user');
        $this->db->from('user');
        $this->db->where('user.id_user', $id);
        $data=$this->db->get();
        return $data;
      }

//tampilan dashboard
      function dashboard_daftar_baru(){
        // get total rows
        $this->db->from('pendaftaran_baru');
          return $this->db->count_all_results();
      }

      function dashboard_daftar_ulang(){
        // get total rows
        $this->db->from('pendaftaran_ulang');
          return $this->db->count_all_results();
      }

      function dashboard_daftar_kelulusan($where){
        //get where
      return $this->db->query('select * from siswa '.$where);
      }
//end of tampilan dashboard



}
