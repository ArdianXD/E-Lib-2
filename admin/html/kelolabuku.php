<?php
// require_once '../../inc/koneksi.php';
// require_once '../../functions/penting.php';
require_once __DIR__ . '/../../inc/env.php';
require_once __DIR__ . '/../../inc/koneksi.php';
require_once __DIR__ . '/../../vendor/autoload.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<?php
            $sql_user = 'SELECT nama, username, email, id_user FROM user';
            $query_user = mysqli_query($con, $sql_user);

            $sql_book = 'SELECT id_buku, judulbuku, kategoribuku, author, file_buku,stok, total_pinjam FROM hlmnbuku';
            $query_book = mysqli_query($con, $sql_book);
            ?>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6" style="width: 0px;">
                    <a class="navbar-brand" href="index.php" >
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <p style="font-family: 'Segoe UI', Tahoma, Verdana, sans-serif; font-size:26px">E-lib</p>
                        </b>
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="mdi mdi-menu"></i></a>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="../index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="kelolaanggota.php" aria-expanded="false"><i
                                    class="mdi mdi-account-network"></i><span class="hide-menu">Kelola Anggota</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="kelolabuku.php" aria-expanded="false"><i
                                    class="mdi mdi-book"></i><span class="hide-menu">Kelola Buku</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                        href="../../auth/logout.php" aria-expanded="false"><i
                                    class="mdi mdi-logout-variant"></i><span class="hide-menu">Logout</span></a></li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.php" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Kelola Buku</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Kelola Buku</h1> 
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                <a href="book/add-book.php"><button type="button" class="btn btn-primary" style="margin-bottom: 5px;">Tambah buku</button></a>
            
                <div class="row">
                    <div class="box-body">
			<div class="table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
                            <th>Id Buku</th>
							<th>Judul Buku</th>
							<th>Kategori</th>
							<th>Author</th>
							<th>File Buku</th>
							<th>stok</th>
							<th>Jumlah Peminjaman</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>

                    <?php
                        while ($row = mysqli_fetch_array($query_book))
                        {
                            echo '<tr>';
                            echo "<td>" . $row['id_buku'] . "</td>";
                            echo "<td>" . $row['judulbuku'] . "</td>";
                            echo "<td>" . $row['kategoribuku'] . "</td>";
                            echo "<td>" . $row['author'] . "</td>";   
                            echo "<td>" . $row['file_buku'] . "</td>";    
                            echo "<td>" . $row['stok'] . "</td>";
                            echo "<td>" . $row['total_pinjam'] . "</td>";   
                            echo "<td><a href='./book/form-edit.php?id_buku=".$row['id_buku']."'>Ubah</a>
                                      <a href='./book/delete-book.php?id_buku=".$row['id_buku']."'>Hapus</a></td>";
                            echo '</tr>';
                        }
                    ?>
                
					</tbody>

				</table>
			</div>
		</div>
                    <!-- Column -->

                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
            E-Lib
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
</body>

</html>