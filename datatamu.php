<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Guestbook | G&P</title>
    <link rel="icon" href="../images/logo.png" type="image/png" sizes="16x16" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="iLand Multipurpose Landing Page Template" />
    <meta name="keywords" content="iLand HTML Template, iLand Landing Page, Landing Page Template" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="../css/animate.css" />
    <!-- Resource style -->
    <link rel="stylesheet" href="../css/owl.carousel.css" />
    <link rel="stylesheet" href="../css/owl.theme.css" />
    <link rel="stylesheet" href="../css/ionicons.min.css" />
    <!-- Resource style -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand page-scroll" href="index.html"><img src="../images/logo.png" width="80"
                                height="30" alt="iLand" /></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a class="page-scroll" href="#">The Wedding Galang & Pritty</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->

        <div class="main app form" id="main">
            <!-- Main Section-->
            <div class="hero-section">
                <div class="container nopadding">
                    <div class="col mx-auto">
                        <div class="card mt-3" style="background-color: aliceblue;">
                            <div class="card-header bg-green text-black">
                                <b>Data Buku Tamu Wedding Galang & Pritty<strong></strong></b>
                            </div>
                            <div class="card-body">
                                <div class="button-group mb-6">
                                    <a href="guestbook.php" class="btn btn-info btn-success btn-rounded">Tambah Data
                                    </a>
                                    <a href="guestbook.php" class="btn btn-info btn-success btn-rounded"><i
                                            class="fas fa-pencil-square"></i>Back</a>
                                </div>
                                <div class="table-responsive mb-3">
                                    <table id="datatablesSimple"
                                        class="table table-striped-columns table-hover text-center" style=" width:100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center text-light">No.</th>
                                                <th class="text-center text-light">Tanggal</th>
                                                <th class="text-center text-light">Nama</th>
                                                <th class="text-center text-light">Alamat</th>
                                            </tr>
                                        </thead>
                                        <!--- Awal Tampil Data Di tabel-->
                                        <?php
                            $no = 1;
                            //awal tangkap data dari tanggal
                            include "db.php";
                            $query = mysqli_query($koneksi, "select*from buku_tamu");
                            while ($data = mysqli_fetch_array($query)){

                        ?>
                                        <tr>
                                            <td class="text-center"><?= $no++ ?></td>
                                            <td class="text-center">
                                                <?php $tanggals=$data['tanggal']; echo date("d-M-Y", strtotime($tanggals)) ?>
                                            </td>
                                            <td class="text-center">
                                                <?= $data['nama'] ?>
                                            </td>
                                            <td class="text-center">
                                                <?= $data['alamat'] ?>
                                            </td>
                                        </tr>
                                        <?php
                    }?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <button type="button" id="tombol-musik" style="display: none" class="btn btn-light btn-sm rounded-circle btn-music"
        onclick="play(this)" data-status="true" data-url="./assets/music/Theme_Song.mp3">
        <i class="fa-solid fa-circle-pause"></i>
    </button>
    <!-- Footer Section -->
    <div class="footer">
        <div class="container">
            <div class="col-md-3">
                <div class="col-auto text-light">
                    <p class="text-light">Wedding Producer - Wedding Planer - Wedding Organizer</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll To Top -->

    <a id="back-top" class="back-to-top page-scroll" href="#main"> <i class="ion-ios-arrow-thin-up"></i>
    </a>

    <!-- Scroll To Top Ends-->
    </div>
    <!-- Main Section -->
    </div>
    <!-- Wrapper-->

    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="../js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/plugins.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>
    <script src="../js/jquery.subscribe.js"></script>
</body>

</html>