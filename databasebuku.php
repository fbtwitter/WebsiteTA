
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
	
	<body class=" section-bg wow fadeInUp">
		<div class="container">
			<div class="formDaftar">
				<br>
				<div class="judul">
					<h5>
						<strong>Daftar E-Book</strong>
					</h5>
                </div>
				<br>
				<table class="table">
					<thead class="thead bg-danger text-center">
						<tr style="color:white;">
							<th scope="col">Judul</th>
							<th scope="col">Penulis</th>
							<th scope="col">Sinopsis</th>
                            <th scope="col">Hapus Buku</th>
						</tr>
                    </thead>
                    <?php 
                        include 'config.php';
   
                        $query  = "SELECT * FROM buku";
                        $result = mysql_query($query) or die('Error, query failed'); 
                        while($row = mysql_fetch_array($result)) { ?>
					<tbody>
						<tr>
							<th scope="row"><?php   echo $row[1];  ?></th>
							<td><?php      echo $row[2];  ?></td>
							
                            <td class="text-center" >
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#<?php   echo $row[0];  ?>">
                                  Detail
                                </button>

                                <div class="modal fade" id="<?php   echo $row[0];  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle"><?php   echo $row[1];  ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php   echo $row[3];  ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                            <td class="text-center"><a href="deletebuku.php?del=<?php echo $row[0]; ?>">Hapus</a></td>
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