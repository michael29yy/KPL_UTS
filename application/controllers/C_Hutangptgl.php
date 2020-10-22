<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Hutangptgl extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/purchasing/hutangptgl.php');
    }

}
