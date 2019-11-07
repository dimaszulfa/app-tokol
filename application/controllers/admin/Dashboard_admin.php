<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('admin/dashboard');
        $this->load->view('templates/footer');
    }

}

/* End of file Dashboard_admin.php */
