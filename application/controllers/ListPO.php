<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ListPO extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model('listpo_model');
        $this->load->library('excel');
    }

    public function index()
    {
    	$this->load->model("listpo_model");
    	$data["fetch_data"] = $this->listpo_model->fetch_data();
        $this->load->view('template/purchasing/listpo.php', $data);
    }

    public function import_listpo(){
        if(isset($_FILES["file_excel_listpo"]["name"])){
            $path = $_FILES["file_excel_listpo"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);

            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

                for ($row=2; $row<=$highestRow; $row++){
                    $nama_suplier = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $divisi = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $kategori = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $no_request = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $no_order = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $tanggal_po = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $part_number = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $keterangan = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $jumlah = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $satuan = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    $harga_satuan = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                    $ppn = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
                    $bll = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
                    $pph23 = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
                    $total = $worksheet->getCellByColumnAndRow(14, $row)->getValue();

                    $tglpo = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($tanggal_po));
                    
                    $data[] = array(
                        "nama_suplier" =>$nama_suplier,
                        "divisi" =>$divisi,
                        "kategori" =>$kategori,
                        "no_request" =>$no_request,
                        "no_order" =>$no_order,
                        "tanggal_po" =>$tglpo,
                        "part_number" =>$part_number,
                        "keterangan" =>$keterangan,
                        "jumlah" =>$jumlah,
                        "satuan" =>$satuan,
                        "harga_satuan" =>$harga_satuan,
                        "ppn" =>$ppn,
                        "bll" =>$bll,
                        "pph23" =>$pph23,
                        "total" =>$total
                    );
                }
            }
            $this->listpo_model->insert_data_excel($data);
        }
        redirect("ListPO");
    }

    public function update_listpo(){

        $data = array(
            "nama_suplier" =>$this->input->post("nama_suplier"),
            "divisi" =>$this->input->post("divisi"),
            "kategori" =>$this->input->post("kategori"),
            "no_request" =>$this->input->post("no_request"),
            "no_order" =>$this->input->post("no_order"),
            "tanggal_po" =>$this->input->post("tanggal_po"),
            "part_number" =>$this->input->post("part_number"),
            "keterangan" =>$this->input->post("keterangan"),
            "jumlah" =>$this->input->post("jumlah"),
            "satuan" =>$this->input->post("satuan"),
            "harga_satuan" =>$this->input->post("harga_satuan"),
            "ppn" =>$this->input->post("ppn"),
            "bll" =>$this->input->post("bll"),
            "pph23" =>$this->input->post("pph23"),
            "total" =>$this->input->post("total")
        );

        $this->listpo_model->update_data($data, $this->input->post("hidden_id"));

        redirect("ListPO");
    }

    public function delete_listpo(){
        $id = $this->input->post("id_delete");
        $this->listpo_model->delete_data($id);
        redirect("ListPO");
    }

}
