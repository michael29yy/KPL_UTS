<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        Purchasing-Vendor
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
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

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
            <li class="nav-item">
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
            <li class="nav-item active">
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
                        <h1 class="h3 mb-0 text-gray-800">Vendor</h1>
                    </div>
                    <hr/>
                    <br/>

                    <div class="row mx-2"> 

                        <div class="card mr-2">
                            
                                <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambahVendor">Tambah Vendor</button>
                            
                        </div>

                    </div>

                    <div class="card shadow m-2">
                        <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Table Vendor</h6>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Vendor</th>
                                        <th>Kode</th>
                                        <th>Tax</th>
                                        <th>Term of Payment</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Vendor</th>
                                        <th>Kode</th>
                                        <th>Tax</th>
                                        <th>Term of Payment</th>
                                        <th>Opsi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                        if ($fetch_data->num_rows() > 0):
                                            $nomor = 0;
                                            foreach ($fetch_data->result() as $row):
                                                $id = $row->kode;
                                    ?>
                                                <td><?= $nomor+=1; ?></td>
                                                <td><?= $row->nama_vendor; ?></td>
                                                <td><?= $row->kode; ?></td>
                                                <td><?= $row->tax; ?></td>
                                                <td><?= $row->term_of_payment; ?></td>
            
                                      <td>
                                        <a href="" class="btn btn-warning" data-toggle="modal" data-target="#editvendor<?php echo $no_ed = $id; ?>"><i class="fas fa-edit"></i></a>

                                        <!-- Edit Leasing Modal -->
                                        <div class="modal fade" id="editvendor<?php echo $no_ed ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalEditLeasing">Edit Leasing</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?php echo base_url() ;?>MVendor/update_vendor" method="POST">
                                                            <input type="text" name="hidden_id" value="<?php echo $no_ed; ?>" hidden>
                                                            <div class="form-group">
                                                                <div class="form-label-group">
                                                                    <label>Nama Vendor : </label>
                                                                    <input class="form-control" type="text" name="nama_vendor" value="<?= $row->nama_vendor;?>" placeholder="nama vendor">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-label-group">
                                                                    <label>Kode : </label>
                                                                    <input class="form-control" type="text" name="kode" placeholder="<?= $row->kode;?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-label-group">
                                                                    <label>Tax : </label>
                                                                    <input class="form-control" type="text" name="kode" placeholder="<?= $row->tax;?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-label-group">
                                                                    <label>Term of Payment : </label>
                                                                    <input class="form-control" type="text" name="termop" value="<?= $row->term_of_payment;?>" placeholder="term of payment">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="form-label-group">
                                                                    <button class="form-control btn-primary" type="submit" name="updateVendor">Update</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deletevendor<?php echo $no_del = $id; ?>"><i class="fas fa-trash-alt"></i></a>

                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deletevendor<?php echo $no_del ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modaldeletevendor">Delete Vendor No.<?= $nomor;?></h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin ingin menghapus data <?= $row->kode; ?> ?
                                                        <form action="<?php echo base_url() ;?>MVendor/delete_vendor" method="POST">
                                                            <input class="form-control" type="text" name="id_delete" value="<?= $id; ?>" hidden/>
                                                            <br/>
                                                            <button class="form-control btn-danger" type="submit" name="deletevendor">Delete</button>
                                                        </form>
                                                        <br/>
                                                        <button class="form-control btn-default" type="button" data-dismiss="modal">Cancel</button>
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

    <!-- Tambah Vendor Modal -->
    <div class="modal fade" id="modalTambahVendor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahVendor">Tambah Vendor</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() ;?>MVendor/tambah_vendor" method="POST">
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Nama Vendor : </label>
                                <input class="form-control" type="text" name="nama_vendor" placeholder="nama vendor">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Kode : </label>
                                <input class="form-control" type="text" name="kode" placeholder="v-xxx" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Tax : </label>
                                <select class="form-control" name="tax">
                                    <option class="form-control" value="T">T(Tax)</option>
                                    <option class="form-control" value="NT">NT(Non-Tax)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label>Term of Payment : </label>
                                <input class="form-control" type="text" name="termop" placeholder="term of payment">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <button class="form-control btn-primary" type="submit" name="tambahVendor">Add</button>
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

</body>

</html>