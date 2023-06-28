<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Karyawan_model', 'M_karyawan');
        // if (!empty($this->session->userdata['username'])) {
        //   redirect('login');
        // }
    }

    public function index()
    {
        $this->load->view('login');
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

    public function sign_up()
    {
        // php 8.0 > newer htmlspecialchars($somthings ?? '')
        $nama_lengkap = htmlspecialchars($this->input->post('nama'));
        $email = htmlspecialchars($this->input->post('email'));
        $password = htmlspecialchars($this->input->post('password'));

        $data = [
            'nama' => $nama_lengkap,
            'email' => $email,
            'password' => $password,
            'id_user' => 4
        ];
        // var_dump($data);

        // Insert sintaks
        $insert = $this->db->insert('tb_account', $data);

        if (!$insert) {
            echo "<script>alert('Insert data failed')</script>";
        } else {
            echo "<script>alert('Insert data success')</script>";
        }
    }

    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $get_data = $this->M_karyawan->loginKaryawan($username);
        // var_dump($get_data);
        if ($get_data) {
            if ($get_data['username'] == $username) {
                if ($get_data['password'] == $password) {
                    $data = [
                        'id_user' => $get_data['id_user'],
                        'username' => $get_data['username'],
                        'level' => $get_data['level']
                    ];
                    $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Selamat datang ' . $get_data['username']));
                    $this->session->set_userdata($data);
                    redirect('dashboard', $data);
                    // var_dump($data);
                } else {
                    $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal login password salah'));
                    redirect('login');
                    // var_dump($get_data);
                }
            } else {
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal login username salah'));
                redirect('login');
                // var_dump($get_data);
            }
        } else {
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal login username atau password salah'));
            redirect('login');
            // var_dump($get_data);
        }
    }

    public function logout()
    {
        $account_data = $this->session->all_userdata();
        foreach ($account_data as $key) {
            if ($key != 'username' && $key != 'id_user' && $key != 'level') {
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();
        redirect('login');
    }
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */