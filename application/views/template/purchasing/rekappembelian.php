<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Purchasing-Rekap Pembelian
    </title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar bg-gradient-dark sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url();?>Purchasing">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-money-bill-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Purchasing Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>Purchasing">
                    <i class="fas fa-fw fa-desktop"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-file-contract"></i>
                    <span>Pembelian</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu :</h6>
                        <a class="collapse-item" href="<?php echo base_url() ;?>RekapPembelian">Rekap Pembelian</a>
                        <a class="collapse-item" href="<?php echo base_url() ;?>ListPO">List PO</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Vendor</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu :</h6>
                        <a class="collapse-item" href="<?php echo base_url() ;?>MVendor">Term of payment</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Purchase -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHutang" aria-expanded="true" aria-controls="collapseHutang">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Hutang</span>
                </a>
                <div id="collapseHutang" class="collapse" aria-labelledby="headingHutang" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu :</h6>
                        <a class="collapse-item" href="<?php echo base_url() ;?>C_Hutangpvdr">Per Vendor</a>
                        <a class="collapse-item" href="<?php echo base_url() ;?>C_Hutangptgl">Per Tanggal</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pengaturan Profil</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
                    <span>Log Out</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 medium">Admin bin Admin</span>
                                <img class="img-profile rounded-circle" src="assets/img/kuma-sama.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Pengaturan
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Content Body -->
                <div class="card m-3">

                    <div class="mx-4 mt-4 mb-2 text-center">
                        <h1 class="h3 mb-0 text-gray-800">Rekap Pembelian</h1>
                    </div>
                    <hr/>
                    <br/>

                    <div class="mx-2" >
                        <ul class="nav nav-tabs nav-pills nav-fill">
                            <li class="nav-item">
                                <a href="#STLI" class="nav-link active" role="tab" data-toggle="tab">PT STLI</a>
                            </li>

                            <li class="nav-item">
                                <a href="#HERA" class="nav-link" role="tab" data-toggle="tab">PT HERA</a>
                            </li>

                            <li class="nav-item">
                                <a href="#BMT" class="nav-link" role="tab" data-toggle="tab">PT BMT</a>
                            </li>
                            
                        </ul>
                    </div>
                    <br/>

                    <!--STLI-->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="STLI">
                            <div class="card shadow m-2" id="card1">
                                <div class="card-header py-3">
                                  <h6 class="m-0 font-weight-bold text-primary">Table Rekap Pembelian PT STLI</h6>
                                </div>
                                <div class="card-body">
                                  <div class="table-responsive" id="">
                                    <table class="table table-bordered display" id="" width="100%" cellspacing="0">
                                      <thead>
                                        <tr class="m-0 font-weight-bold ">
                                          <th>No</th>
                                          <th>Kategori</th>
                                          <th>Biaya Total</th>
                                          <th>Opsi</th>
                                        </tr>
                                      </thead>
                                      <tfoot>
                                        <tr class="m-0 font-weight-bold ">
                                          <th>No</th>
                                          <th>Kategori</th>
                                          <th>Biaya Total</th>
                                          <th>Opsi</th>
                                        </tr>
                                      </tfoot>
                                      <tbody>
                                        <?php 
                                            if ($fetch_data_kategori->num_rows() > 0):
                                                foreach ($fetch_data_kategori->result() as $row):
                                        ?>
                                                    <tr>
                                                        <td><?php echo $row->id_kategori; ?></td>
                                                        <td><?php echo $row->nama_kategori; ?></td>
                                                        <td id="rupiah">
                                                        <?php 
                                                            $stl = "STL";
                                                            $ktt = $row->nama_kategori;
                                                            $query = "SELECT SUM(total) as total FROM barang WHERE no_order LIKE '%".$stl."%' and kategori = '$ktt'";
                                                            $result = $this->db->query($query);
                                                            $result = $result->result();
                                                            foreach ($result as $rowtotal):
                                                        ?>
                                                                Rp. <?php echo number_format($rowtotal->total); ?>
                                                            <?php endforeach; ?>
                                                        </td>
                                                        <td>
                                                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal_<?php echo $kt = $row->id_kategori; ?>">Detail
                                                        </a>

                                                        <!-- Detail Modal -->
                                                        <div class="modal fade" id="modal_<?php echo $kt;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Data</h5>
                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>  
                                                                    <div class="modal-body">
                                                                        Tabel Barang Kategori (<?php echo $ktt; ?>) PT STLI
                                                                        <br/>
                                                                        <?php 
                                                                            
                                                                            $query = "SELECT COUNT(keterangan) as tott FROM barang WHERE no_order LIKE '%".$stl."%' and kategori = '$ktt'";
                                                                            $result = $this->db->query($query);
                                                                            $result = $result->result();
                                                                            foreach ($result as $rowjmlbrs):
                                                                        ?>
                                                                                Jumlah Baris = <?php echo $rowjmlbrs->tott; ?>
                                                                            <?php endforeach; ?>
                                                                        <table class="table table-bordered display" id="" width="100%" cellspacing="0">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Tanggal</th>
                                                                                    <th>Keterangan</th>
                                                                                    <th>Qty</th>
                                                                                    <th>Satuan</th>
                                                                                    <th>Harga Satuan</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                    $query = "SELECT * FROM barang WHERE no_order LIKE '%".$stl."%' and kategori = '$ktt'";
                                                                                    $result = $this->db->query($query);
                                                                                    $result = $result->result();
                                                                                    foreach ($result as $rowstli):

                                                                                ?>
                                                                                <tr>
                                                                                    <td><?php echo $rowstli->tanggal_po; ?></td>
                                                                                    <td><?php echo $rowstli->keterangan; ?></td>
                                                                                    <td><?php echo $rowstli->jumlah ?></td>
                                                                                    <td><?php echo $rowstli->satuan ?></td>
                                                                                    <td>Rp. <?php echo number_format($rowstli->harga_satuan); ?></td>
                                                                                </tr>
                                                                                <?php endforeach; ?>
                                                                            </tbody>
                                                                        </table>     
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      </td>
                                                    </tr>
                                        <?php 
                                                endforeach;
                                            endif;
                                        ?>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>
                            </div>
                            <!-- End Of Card -->
                        </div>

                        <!--HERA-->
                        <div role="tabpanel" class="tab-pane fade" id="HERA">
                            <div class="card shadow m-2" id="card1">
                                <div class="card-header py-3">
                                  <h6 class="m-0 font-weight-bold text-primary ">Table Rekap Pembelian PT HERA</h6>
                                </div>
                                <div class="card-body">
                                  <div class="table-responsive" id="">
                                    <table class="table table-bordered display" id="" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="m-0 font-weight-bold ">
                                              <th>No</th>
                                              <th>Kategori</th>
                                              <th>Biaya Total</th>
                                              <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              <th>No</th>
                                              <th>Kategori</th>
                                              <th>Biaya Total</th>
                                              <th>Opsi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php 
                                            if ($fetch_data_kategori->num_rows() > 0):
                                                foreach ($fetch_data_kategori->result() as $row2):
                                        ?>
                                                    <tr>
                                                        <td><?php echo $row2->id_kategori; ?></td>
                                                        <td><?php echo $row2->nama_kategori; ?></td>
                                                        <td id="rupiah">
                                                        <?php 
                                                            $hera = "HERA";
                                                            $ktt = $row2->nama_kategori;
                                                            $query2 = "SELECT SUM(total) as total FROM barang WHERE no_order LIKE '%".$hera."%' and kategori = '$ktt'";
                                                            $result2 = $this->db->query($query2);
                                                            $result2 = $result2->result();
                                                            foreach ($result2 as $rowtotal2):
                                                        ?>
                                                                Rp. <?php echo number_format($rowtotal2->total); ?>
                                                            <?php endforeach; ?>
                                                        </td>
                                                        <td>
                                                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal2_<?php echo $kt = $row->id_kategori; ?>">Detail
                                                        </a>

                                                        <!-- Detail Modal -->
                                                        <div class="modal fade" id="modal2_<?php echo $kt;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Data</h5>
                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>  
                                                                    <div class="modal-body">
                                                                        Tabel Barang Kategori (<?php echo $ktt; ?>) PT HERA
                                                                        <br/>
                                                                        <?php 
                                                                            
                                                                            $query2 = "SELECT COUNT(keterangan) as tott FROM barang WHERE no_order LIKE '%".$hera."%' and kategori = '$ktt'";
                                                                            $result2 = $this->db->query($query2);
                                                                            $result2 = $result2->result();
                                                                            foreach ($result2 as $rowjmlbrs2):
                                                                        ?>
                                                                                Jumlah Baris = <?php echo $rowjmlbrs2->tott; ?>
                                                                            <?php endforeach; ?>
                                                                        <table class="table table-bordered display" id="" width="100%" cellspacing="0">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Tanggal</th>
                                                                                    <th>Keterangan</th>
                                                                                    <th>Qty</th>
                                                                                    <th>Satuan</th>
                                                                                    <th>Harga Satuan</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                    $query2 = "SELECT * FROM barang WHERE no_order LIKE '%".$hera."%' and kategori = '$ktt'";
                                                                                    $result2 = $this->db->query($query2);
                                                                                    $result2 = $result2->result();
                                                                                    foreach ($result2 as $rowhera):

                                                                                ?>
                                                                                <tr>
                                                                                    <td><?php echo $rowhera->tanggal_po; ?></td>
                                                                                    <td><?php echo $rowhera->keterangan; ?></td>
                                                                                    <td><?php echo $rowhera->jumlah ?></td>
                                                                                    <td><?php echo $rowhera->satuan ?></td>
                                                                                    <td>Rp. <?php echo number_format($rowhera->harga_satuan); ?></td>
                                                                                </tr>
                                                                                <?php endforeach; ?>
                                                                            </tbody>
                                                                        </table>     
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      </td>
                                                    </tr>
                                        <?php 
                                                endforeach;
                                            endif;
                                        ?>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>
                            </div>
                            <!-- End Of Card -->
                        </div>

                        <!-- BMT -->
                        <div role="tabpanel" class="tab-pane fade" id="BMT">
                            <div class="card shadow m-2" id="card1">
                                <div class="card-header py-3">
                                  <h6 class="m-0 font-weight-bold text-primary ">Table Rekap Pembelian PT BMT</h6>
                                </div>
                                <div class="card-body">
                                  <div class="table-responsive" id="">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                      <thead>
                                        <tr class="m-0 font-weight-bold ">
                                          <th>No</th>
                                          <th>Kategori</th>
                                          <th>Biaya Total</th>
                                          <th>Opsi</th>
                                        </tr>
                                      </thead>
                                      <tfoot>
                                        <tr class="m-0 font-weight-bold ">
                                          <th>No</th>
                                          <th>Kategori</th>
                                          <th>Biaya Total</th>
                                          <th>Opsi</th>
                                        </tr>
                                      </tfoot>
                                      <tbody>
                                        <?php 
                                            if ($fetch_data_kategori->num_rows() > 0):
                                                foreach ($fetch_data_kategori->result() as $row3):
                                        ?>
                                                    <tr>
                                                        <td><?php echo $row3->id_kategori; ?></td>
                                                        <td><?php echo $row3->nama_kategori; ?></td>
                                                        <td id="rupiah">
                                                        <?php 
                                                            $bmt = "BMT";
                                                            $ktt = $row3->nama_kategori;
                                                            $query3 = "SELECT SUM(total) as total FROM barang WHERE no_order LIKE '%".$bmt."%' and kategori = '$ktt'";
                                                            $result3 = $this->db->query($query3);
                                                            $result3 = $result3->result();
                                                            foreach ($result3 as $rowtotal3):
                                                        ?>
                                                                Rp. <?php echo number_format($rowtotal3->total); ?>
                                                            <?php endforeach; ?>
                                                        </td>
                                                        <td>
                                                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal3_<?php echo $kt = $row->id_kategori; ?>">Detail
                                                        </a>

                                                        <!-- Detail Modal -->
                                                        <div class="modal fade" id="modal3_<?php echo $kt;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Data</h5>
                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>  
                                                                    <div class="modal-body">
                                                                        Tabel Barang Kategori (<?php echo $ktt; ?>) PT HERA
                                                                        <br/>
                                                                        <?php 
                                                                            
                                                                            $query3 = "SELECT COUNT(keterangan) as tott FROM barang WHERE no_order LIKE '%".$bmt."%' and kategori = '$ktt'";
                                                                            $result3 = $this->db->query($query3);
                                                                            $result3 = $result3->result();
                                                                            foreach ($result3 as $rowjmlbrs3):
                                                                        ?>
                                                                                Jumlah Baris = <?php echo $rowjmlbrs3->tott; ?>
                                                                            <?php endforeach; ?>
                                                                        <table class="table table-bordered display" id="" width="100%" cellspacing="0">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Tanggal</th>
                                                                                    <th>Keterangan</th>
                                                                                    <th>Qty</th>
                                                                                    <th>Satuan</th>
                                                                                    <th>Harga Satuan</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                    $query3 = "SELECT * FROM barang WHERE no_order LIKE '%".$bmt."%' and kategori = '$ktt'";
                                                                                    $result3 = $this->db->query($query3);
                                                                                    $result3 = $result3->result();
                                                                                    foreach ($result3 as $rowbmt):

                                                                                ?>
                                                                                <tr>
                                                                                    <td><?php echo $rowbmt->tanggal_po; ?></td>
                                                                                    <td><?php echo $rowbmt->keterangan; ?></td>
                                                                                    <td><?php echo $rowbmt->jumlah ?></td>
                                                                                    <td><?php echo $rowbmt->satuan ?></td>
                                                                                    <td>Rp. <?php echo number_format($rowbmt->harga_satuan); ?></td>
                                                                                </tr>
                                                                                <?php endforeach; ?>
                                                                            </tbody>
                                                                        </table>     
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      </td>
                                                    </tr>
                                        <?php 
                                                endforeach;
                                            endif;
                                        ?>
                                        </tbody>
                                    </table>
                                  </div>
                                </div>
                            </div>
                            <!-- End Of Card -->
                        </div>
                        <!-- End of BMT Content -->
                    </div>
                    <!-- End of Tab Content -->
                </div>
                <!-- End of Content Body -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PKL-IF_BOOLEAN 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siap untuk keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih Logout jika anda yakin untuk keluar.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="">Logout</a>
                    </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Kategori -->
    <div class="modal fade" id="tambahKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="<?php echo base_url() ;?>C_RekapP/tambah_kategori" method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nama Kategori : </label>
                                <input class="form-control" type="text" name="nm_kategori">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <button class="form-control btn-primary" type="submit" name="tambah">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

<!-- Bootstrap core JavaScript-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="assets/js/demo/datatables-demo.js"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
    $('table.display').DataTable();
} );
</script>
</body>

</html>