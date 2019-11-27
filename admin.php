<!DOCTYPE html>
<html lang="en">
        
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Home Admin</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/style.css" media="all">


</head>

<body class="animsition">
    <div class="page-wrapper">
	
	<?php
		//print_r($_SESSION);
		
		include 'headerAdmin.php';
	
	?>
        
        <section class="au-breadcrumb2" style="padding-top: 30px; padding-bottom: 30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">index.html</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">

                
            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container-fluid" id="example">
                    <div class="row text-center">
                        <div class="col-md-3 col-lg-3" id="button2">
                            <button class="statistic__item statistic__item" style="width: 100%; background: steelblue; height: 250px;" data-toggle="collapse" data-target="#jurnal" aria-expanded="true" aria-controls="collapseTwo">
                                <h2 class="number"><img src="images/journaled.png" alt="" style="padding-bottom: 5px;">
                                    INPUT JURNAL</h2>
                            </button>
                        </div>
                        <div class="col-md-3 col-lg-3" id="button3">
                            <button class="statistic__item statistic__item--blue" style="width: 100%; height: 250px;" data-toggle="collapse" data-target="#buku" aria-expanded="true" aria-controls="collapseThree">
                                <h2 class="number"><img src="images/book-open3.png" alt="" style="padding-bottom: 5px;">
                                    INPUT BUKU</h2>
                            </button>
                        </div>
                        <div class="col-md-3 col-lg-3" id="button4">
                             <button class="statistic__item statistic__item--red" style="width: 100%; height: 250px;" data-toggle="collapse" data-target="#news" aria-expanded="true" aria-controls="collapseFour">
                                <h2 class="number"><img src="images/news2.png" alt="" style="padding-bottom: 5px;">
                                    INPUT BERITA</h2>
                            </button>
                        </div>
                        <div class="col-md-3 col-lg-3" id="button5">
                             <button class="statistic__item statistic__item--red" style="width: 100%; background: orangered; height: 250px;" data-toggle="collapse" data-target="#mahasiswa" aria-expanded="true" aria-controls="collapseFour">
                                <h2 class="number"><img src="images/user.png" alt="" style="padding-bottom: 5px; width: 100px;"><br>
                                    INPUT MAHASISWA</h2>
                            </button>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-md-2 col-lg-2" id="button6">
                            <button style="width: 100%; background: grey; height:70px;" data-toggle="collapse" data-target="#dbjurnal" aria-expanded="true" aria-controls="collapseTwo">
                                <h2 class="number" style="font-size:20px; color:white;">
                                    DATABASE JURNAL</h2>
                            </button>
                        </div>
                        <div class="col-md-2 col-lg-2" id="button7">
                            <button style="width: 100%; background: grey; height:70px;" data-toggle="collapse" data-target="#dbbuku" aria-expanded="true" aria-controls="collapseTwo">
                                <h2 class="number" style="font-size:20px; color:white;">
                                    DATABASE BUKU</h2>
                            </button>
                        </div>
                        <div class="col-md-2 col-lg-2" id="button8">
                             <button style="width: 100%; background: grey; height:70px;" data-toggle="collapse" data-target="#dbnews" aria-expanded="true" aria-controls="collapseTwo">
                                <h2 class="number" style="font-size:20px; color:white;">
                                    DATABASE NEWS</h2>
                            </button>
                        </div>
                        <div class="col-md-2 col-lg-2" id="button9">
                             <button style="width: 100%; background: grey; height:70px;" data-toggle="collapse" data-target="#dbpengumuman" aria-expanded="true" aria-controls="collapseTwo">
                                <h2 class="number" style="font-size:20px; color:white;">
                                    DATABASE PENGUMUMAN</h2>
                            </button>
                        </div>
                        <div class="col-md-2 col-lg-2" id="button9">
                             <button style="width: 100%; background: red; height:70px;" data-toggle="collapse" data-target="#dbuser" aria-expanded="true" aria-controls="collapseTwo">
                                <h2 class="number" style="font-size:20px; color:white;">
                                    CEK PROGRESS</h2>
                            </button>
                        </div>
                        <div class="col-md-2 col-lg-2" id="button10">
                                <a href="pengumumanadmin.php"><button style="width: 100%; background: blue; height:70px; " data-toggle="collapse" data-target="#pengumuman aria-expanded="true" aria-controls="collapseTwo"><h5 style="color:white;">Input Pengumuman</h5></button></a> 
                        </div>
                    </div>
                    <br>

                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="collapse" id="jurnal" aria-labelledby="button1" data-parent="#example">
                                    <div class="card card-body">
                                           <?php include 'jurnaladmin.php' ?>
                                    </div>
                                </div>
                                <div class="collapse" id="buku" aria-labelledby="button3" data-parent="#example">
                                    <div class="card card-body">
                                            <?php include 'bukuadmin.php' ?>
                                    </div>
                                </div>
                                <div class="collapse" id="news" aria-labelledby="button3" data-parent="#example">
                                    <div class="card card-body">
                                             <?php include 'newsadmin.php' ?>
                                    </div>
                                </div>
                                <div class="collapse" id="dbbuku" aria-labelledby="button3" data-parent="#example">
                                    <div class="card card-body">
                                             <?php include 'databasebuku.php' ?>
                                    </div>
                                </div>
                                <div class="collapse" id="dbjurnal" aria-labelledby="button3" data-parent="#example">
                                    <div class="card card-body">
                                             <?php include 'databasejurnal.php' ?>
                                    </div>
                                </div>
                                <div class="collapse" id="dbnews" aria-labelledby="button3" data-parent="#example">
                                    <div class="card card-body">
                                             <?php include 'databasenews.php' ?>
                                    </div>
                                </div>
                                <div class="collapse" id="dbpengumuman" aria-labelledby="button3" data-parent="#example">
                                    <div class="card card-body">
                                             <?php include 'databasepengumuman.php' ?>
                                    </div>
                                </div>
                                <div class="collapse" id="dbuser" aria-labelledby="button3" data-parent="#example">
                                    <div class="card card-body">
                                             <?php include 'databaseuser.php' ?>
                                    </div>
                                </div>
                                <div class="collapse" id="mahasiswa" aria-labelledby="button3" data-parent="#example">
                                    <div class="card card-body">
                                             <?php include 'inputmahasiswa.php' ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- END STATISTIC-->

            <!-- collapse -->

            <!-- collapse -->

            <!-- footer -->
            <section class="footer" id="footer" style="
                position: inherit;
                width: 100%;
                height: 80px;
                background-color: #333;
                color: #aaa;
                padding-top: 20px;
                ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                        <p> &copy; Copyright 2018 | > | by : Reza.Fauzi.Augusdi | Politeknik . Elektronika . Negeri . Surabaya</a></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- akhir footer -->
        </div>

    </div>


      <!-- jQuery (necessary for Bootstrap 's JavaScript plugins) -->
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
  
      <script src="js/script.js"></script>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->