<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RekapPembelian extends CI_Controller
{
    public function index()
    {
        $this->load->model('rekap_pembelian_model');
        $data['fetch_data_kategori'] = $this->rekap_pembelian_model->fetch_data_kategori();
        $this->load->view('template/purchasing/rekappembelian.php', $data);
    }
}
