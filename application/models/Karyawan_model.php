<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function messageAlert($type, $title)
  {
    $message_alert = "
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000
      });

      Toast.fire({
        icon: '" . $type . "',
        title: '" . $title . "',
      });
    ";
    return $message_alert;
  }

  // View Data
  public function getAllDataKaryawan()
  {
    return $this->db->get('tb_data_karyawan')->result();
  }

  public function getDataKaryawanById($id_karyawan)
  {
    return $this->db->get_where('tb_data_karyawan', ['id_karyawan' => $id_karyawan])->row_array();
  }

  public function checkAbsensi($date, $id_user)
  {
    return $this->db->get_where('tb_absensi', ['tanggal' => $date, 'id_user' => $id_user])->result();
  }

  public function checkJamPulang($id, $date, $jam_pulang)
  {
    return $this->db->get_where('tb_absensi', ['id_user' => $id, 'tanggal' => $date, 'jam_pulang' => $jam_pulang])->row_array();
  }

  // Insert data
  public function addDataKaryawan($data)
  {
    return $this->db->insert('tb_data_karyawan', $data);
  }

  public function addUserAccount($nik, $password, $id_user, $level)
  {
    return $this->db->insert('tb_account', ['username' => $nik, 'password' => $password, 'id_user' => $id_user, 'level' => $level]);
  }

  public function absensi_hadir($data)
  {
    return $this->db->insert('tb_absensi', $data);
  }

  public function absensi_pulang($data, $id)
  {
    $this->db->where('id_user', $id);
    return $this->db->update('tb_absensi', $data);
  }

  public function uploadImage()
  {
    $config['upload_path'] = './images/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = '2048';
    $config['remove_space'] = TRUE;
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('filename'))
      return array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
    else
      return array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
  }

  // public function getDataKaryawanByNik($nik)
  // {
  //   return $this->db->get_where('tb_data_karyawan', ['nik' => $nik]);
  // }

  // public function getAbsensiById($id_absensi)
  // {
  //   return $this->db->get_where('tb_absensi', ['id_absensi' => $id_absensi]);
  // }

  public function loginKaryawan($username)
  {
    return $this->db->get_where('tb_account', ['username' => $username])->row_array();
  }
}
