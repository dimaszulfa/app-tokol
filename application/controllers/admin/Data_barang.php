<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {

    public function index()
    {
        $data['barang'] = $this->barang_model->tampil()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates/footer');
    }

}

/* End of file Data_barang.php */
