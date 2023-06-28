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

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $username = $this->session->userdata('username');
    if (empty($username)) {
      redirect('login');
    }
  }

  public function index()
  {
    $data['username'] = $this->session->userdata('username');
    $data['id_user'] = $this->session->userdata('id_user');
    $data['level'] = $this->session->userdata('level');

    $this->load->view('template/header', $data);
    $this->load->view('dashboard', $data);
    $this->load->view('template/footer', $data);
  }
}
