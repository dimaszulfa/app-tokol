<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function tampil()
    {
        return $this->db->get('t_brg');
    }

}

/* End of file Barang_model.php */
