<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Hutangpvdr extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/purchasing/hutangpvdr.php');
    }

}
