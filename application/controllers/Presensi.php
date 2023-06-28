<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Presensi
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Presensi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $username = $this->session->userdata('username');
        if (empty($username)) {
            redirect('login');
        }
        $this->load->model('Karyawan_model', 'M_Karyawan');
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

    public function index()
    {
        $nik = $this->session->userdata('nik');
        $id_user = $this->session->userdata('id_user');
        $data['username'] = $this->session->userdata('username');
        $data['id_user'] = $this->session->userdata('id_user');
        $data['level'] = $this->session->userdata('level');

        // get data karyawan by ID
        $data['karyawan'] = $this->M_Karyawan->getDataKaryawanById($id_user);
        $all = $this->M_Karyawan->getAllDataKaryawan();

        $data['get_absensi'] = $this->db->get_where('tb_absensi', ['id_user' => $id_user])->result_array();
        $data['jam_masuk'] = $this->db->get_where('tb_absensi', ['id_user' => $id_user])->row_array();
        $data['jam_pulang'] = $this->db->get_where('tb_absensi', ['tanggal' => date('d:M:Y'), 'id_user' => $id_user])->row_array();

        // var_dump($by_id['foto_profile']);
        $this->load->view('template/header', $data);
        $this->load->view('presensi', $data);
        $this->load->view('template/footer', $data);
    }

    public function do_absen()
    {
        $id = $this->session->userdata('id_user');
        // $nama = $this->session->userdata('nama');
        $nama = $this->M_Karyawan->getDataKaryawanById($id);
        $cek = $this->M_Karyawan->checkAbsensi(date('d:M:Y'), $id);
        $cekJamPulang = $this->M_Karyawan->checkJamPulang($id, date('d:M:Y'), date('h:i:s'));

        if (!count($cek) > 0) {
            $data = [
                'nama' => $nama['nama'],
                'tanggal' => date('d:M:Y'),
                'jam_masuk' => date('h:i:s'),
                'id_user' => $id
            ];
            $this->db->insert('tb_absensi', $data);
            $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil mengisi absen hadir'));
            $this->session->set_userdata($data);
            redirect('dashboard', $data);
        } else {
            $data = [
                'jam_pulang' => date('h:i:s')
            ];
            $this->db->where('id_user', $id);
            $this->db->update('tb_absensi', $data);
            $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil mengisi absen pulang'));
            redirect('dashboard',);
        }
    }
}



/* End of file Presensi.php */
/* Location: ./application/controllers/Presensi.php */