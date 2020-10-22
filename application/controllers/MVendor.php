<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MVendor extends CI_Controller
{
    public function index()
    {
        $this->load->model("mvendor_model");
        $data["fetch_data"] = $this->mvendor_model->fetch_data();
        $this->load->view('template/purchasing/vendor.php',$data);
    }

    public function tambah_vendor()
    {
        $this->load->model("mvendor_model");

        $data = array(
            "nama_vendor"=>$this->input->post("nama_vendor"),
            "kode"=>$this->input->post("kode"),
            "tax"=>$this->input->post("tax"),
            "term_of_payment"=>$this->input->post("termop")
        );
    	
        $this->mvendor_model->insert_data($data);
    	redirect("MVendor");
    }

    public function update_vendor(){
        $this->load->model("mvendor_model");

        $data = array(
            "nama_vendor"=>$this->input->post("nama_vendor"),
            "term_of_payment"=>$this->input->post("termop")
        );

        $this->mvendor_model->update_data($data, $this->input->post("hidden_id"));
        redirect("MVendor");

    }

    public function delete_vendor()
    {
        $id = $this->input->post("id_delete");
        $this->load->model("mvendor_model");
        $this->mvendor_model->delete_data($id);
        redirect("Mvendor");
    }
}
