<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Jurnal</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="css/style.css" rel="stylesheet">

</head>
<body>
	<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<title>Laman Admin</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="keywords">
		<meta content="" name="description">
	
		<!-- Favicons -->
		<link href="img/logo.png" rel="icon">
		<link href="img/apple-touch-icon.png" rel="apple-touch-icon">
	
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
	
		<!-- Bootstrap CSS File -->
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
		<!-- Libraries CSS Files -->
		<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="lib/animate/animate.min.css" rel="stylesheet">
		<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
	
		<!-- Main Stylesheet File -->
		<link href="css/style.css" rel="stylesheet">
	
	</head>
	
	<body class=" section-bg wow fadeInUp">
		<div class="container">
			<div class="formDaftar">
				<br>
				<div class="judul">
					<h5>
						<strong>Database Pengumuman</strong>
					</h5>
                </div>
				<br>
				<table class="table">
					<thead class="thead bg-warning text-center">
						<tr style="color:white;">
							<th scope="col">ID</th>
							<th scope="col">DARI</th>
							<th scope="col">UNTUK</th>
                            <th scope="col">PESAN</th>
                            <th scope="col">HAPUS</th>
						</tr>
                    </thead>
                    <?php 
                        include 'config.php';
   
                        $query1  = "SELECT * FROM pengumuman";
                        $result1 = mysql_query($query1) or die('Error, query failed'); 
                        while($row1 = mysql_fetch_array($result1)) { ?>
					<tbody>
						<tr>
							<th scope="row"><?php   echo $row1[0];  ?></th>
							<td><?php      echo $row1[1];  ?></td>
                            <td><?php      echo $row1[2];  ?></td>
                            <td><?php      echo $row1[3];  ?></td>
                            <td><a href="deletepengumuman.php?del=<?php echo $row1[0]; ?>">Hapus</a></td>
                        </tr>

                        <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
	
	</html>

		<!-- JavaScript Libraries -->
		<script src="lib/jquery/jquery.min.js"></script>
		<script src="lib/jquery/jquery-migrate.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="lib/easing/easing.min.js"></script>
		<script src="lib/superfish/hoverIntent.js"></script>
		<script src="lib/superfish/superfish.min.js"></script>
		<script src="lib/wow/wow.min.js"></script>
		<script src="lib/waypoints/waypoints.min.js"></script>
		<script src="lib/counterup/counterup.min.js"></script>
		<script src="lib/owlcarousel/owl.carousel.min.js"></script>
		<script src="lib/isotope/isotope.pkgd.min.js"></script>
		<script src="lib/lightbox/js/lightbox.min.js"></script>
		<script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
		<script src="contactform/contactform.js"></script>

		<script src="js/main.js"></script>

</body>

</html>