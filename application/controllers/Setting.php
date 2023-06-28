<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Main.php
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

class Setting extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Karyawan_model', 'M_karyawan');
    }

    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        $data['id_user'] = $this->session->userdata('id_user');
        $data['level'] = $this->session->userdata('level');

        $this->load->view('template/header', $data);
        $this->load->view('setting', $data);
        $this->load->view('template/footer', $data);
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

    public function addKaryawan()
    {
        $id_karyawan = rand(111111, 999999);
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $jabatan = $this->input->post('jabatan');
        $password = $this->input->post('password');
        $foto = $this->M_karyawan->uploadImage();

        if ($foto['result'] == 'success') {
            $data = [
                'id_karyawan' => $id_karyawan,
                'nik' => $nik,
                'nama' => $nama,
                'tanggal_lahir' => $tanggal_lahir,
                'email' => $email,
                'no_telp' => $no_telp,
                'tanggal_masuk' => $tanggal_masuk,
                'jabatan' => $jabatan,
                'foto_profile' => $foto['file']['file_name']
            ];

            $addUserAccount = $this->M_karyawan->addUserAccount($nik, $password, $id_karyawan, $jabatan);
            $addDataKaryawan = $this->M_karyawan->addDataKaryawan($data);
            if ($addUserAccount == 1 || $addDataKaryawan == 1) {
                $this->session->set_flashdata('messageAlert', $this->M_karyawan->messageAlert('success', 'Berhasil menambahkan karyawan'));
                redirect('setting');
            } else {
                $this->session->set_flashdata('messageAlert', $this->M_karyawan->messageAlert('error', 'Gagal menambahkan karyawan'));
                redirect('setting');
            }
        } else {
            $this->session->set_flashdata('messageAlert', $this->M_karyawan->messageAlert('error', 'Gagal mengupload gambar'));
            redirect('setting');
        }
    }
}
