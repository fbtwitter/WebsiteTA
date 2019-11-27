<?php
// we must never forget to start the session
session_start();

$errorMessage = '';
if (isset($_POST['btnLogin'])) {
    include 'config.php';
    
    $username = $_POST['tuname'];
    $password = $_POST['txtPassword'];
    
    // check if the user id and password combination exist in database
    $sql = "SELECT * 
            FROM user
            WHERE username = '$username' AND password = '$password'";
    
    $result = mysql_query($sql) or die('Query failed. ' . mysql_error()); 
    $row = mysql_fetch_array($result);
    if (mysql_num_rows($result) == 1) {
        // the user id and password match, 
        // set the session
        $_SESSION['user'] = $row['nrp'];
		$_SESSION['jurusan'] = $row['prodi'];
		header('Location: index.php');
        exit;
    } else {
        $errorMessage = 'Sorry, wrong user id / password';
    }
	mysql_close($conn);
}
?>

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
    <title>Website Tugas Akhir</title>

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
		
		if (isset($_SESSION['user']))
			include 'headertrue.php';
		else
			include 'headerfalse.php';
	
	?>
        

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- Carousel -->
        <section class="slideshow" id="slideshow">
                <div class="container-fluid" id="fluid">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style="width: 100%;padding: 0px; border-width: 0px;height: 480px;">
                          <div class="carousel-item active">
                            <img class="d-block w-100" style="width: 100%;" src="images/seminar.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" style="height: auto;" src="images/sidang.jpg" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" style="height: auto;" src="images/juara.jpg" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
        </section>
         <!-- Carousel -->
                
            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container-fluid" id="example">
                    <div class="row">
                        <div class="col-md-2 col-lg-2" id="button1">
                            <button class="statistic__item statistic__item" style="width: 100%; background: cadetblue; height: 250px;" data-toggle="collapse" data-target="#aboutus" aria-expanded="true" aria-controls="collapseOne">
                                <h2 class="number"><img src="images/pensJOSSS.png" alt="" style="padding-bottom: 5px;">
                                    About Us</h2>
                            </button>
                        </div>
                        <div class="col-md-2 col-lg-2" id="button2">
                            <button class="statistic__item statistic__item" style="width: 100%; background: steelblue; height: 250px;" data-toggle="collapse" data-target="#jurnal" aria-expanded="true" aria-controls="collapseTwo">
                                <h2 class="number"><img src="images/journaled.png" alt="" style="padding-bottom: 5px;">
                                    Jurnal</h2>
                            </button>
                        </div>
                        <div class="col-md-2 col-lg-2" id="button3">
                            <button class="statistic__item statistic__item--blue" style="width: 100%; height: 250px;" data-toggle="collapse" data-target="#buku" aria-expanded="true" aria-controls="collapseThree">
                                <h2 class="number"><img src="images/book-open3.png" alt="" style="padding-bottom: 5px;">
                                    Buku</h2>
                            </button>
                        </div>
                        <div class="col-md-2 col-lg-2" id="button4">
                             <button class="statistic__item statistic__item--red" style="width: 100%; height: 250px;" data-toggle="collapse" data-target="#news" aria-expanded="true" aria-controls="collapseFour">
                                <h2 class="number"><img src="images/news2.png" alt="" style="padding-bottom: 5px;">
                                    News</h2>
                            </button>
                        </div>
                        <div class="col-md-4 col-lg-4">
                                <button class="statistic__item statistic__item" style="width: 100%; background: orangered; height: 250px;" data-toggle="collapse" data-target="#pengumuman" aria-expanded="false">
                                    <h2 class="number"><img src="images/pengumuman.png" alt="" style="padding-bottom: 5px;">
                                        Pengumuman</h2>
                                </button>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-8 col-lg-8">
                                <div class="collapse show" id="aboutus" aria-labelledby="button1" data-parent="#example">
                                    <div class="card card-body">
                                            Welcome to Website PENS Tugas Akhir! Website ini digunakan untuk mahasiswa tingkat akhir yang akan mengunpload dokumen tugas akhir.
                                    </div>
                                </div>
                                <div class="collapse" id="jurnal" aria-labelledby="button2" data-parent="#example">
                                    <div class="card card-body">
                                            <?php include 'jurnal.php' ?>
                                    </div>
                                </div>
                                <div class="collapse" id="buku" aria-labelledby="button3" data-parent="#example">
                                    <div class="card card-body">
                                             <?php include 'buku.php' ?>
                                    </div>
                                    </div>
                                <div class="collapse" id="news" aria-labelledby="button4" data-parent="#example">
                                    <div class="card card-body">
                                        <div id="demo" class="carousel slide" data-ride="carousel">

                                            <!-- Indicators -->
                                            <ul class="carousel-indicators">
                                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                                <li data-target="#demo" data-slide-to="1"></li>
                                                <li data-target="#demo" data-slide-to="2"></li>
                                            </ul>

                                            <!-- The slideshow -->
                                            <div class="carousel-inner row">
                                                <?php include 'news.php' ?>
                                            </div>

                                            <!-- Left and right controls -->
                                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </a>
                                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </a>

                                        </div>       
                                    </div>
                                </div>
                            </div>
							
						
							
                            <div class="col-md-4 col-lg-4">
                                <div class="" id="pengumuman">
                                    <div class="card card-body">
                                        <div align="center"><marquee direction="up" scrollamount="1" style="width:100%; height:200px;"> 
										<?php include 'pengumuman.php'; ?>
										</marquee></div>    
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
                        <p> &copy; Copyright 2018 | > | by : Wakanda . Team | Politeknik . Elektronika . Negeri . Surabaya</a></p>
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