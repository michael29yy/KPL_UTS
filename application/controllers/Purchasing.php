<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Purchasing extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/purchasing/purchasing.php');
    }

}
