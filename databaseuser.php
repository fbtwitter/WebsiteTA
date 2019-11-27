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
						<strong>Database Mahasiswa</strong>
					</h5>
                </div>
				<br>
				<table class="table">
					<thead class="thead bg-secondary text-center">
						<tr style="color:white;">
							<th scope="col">NRP</th>
							<th scope="col">NAMA</th>
							<th scope="col">KELAS</th>
							<th scope="col">CEK</th>
                            <th scope="col">HAPUS</th>
						</tr>
                    </thead>
                    <?php 
                        include 'config.php';
   
                        $query1  = "SELECT * FROM user";
                        $result1 = mysql_query($query1) or die('Error, query failed'); 
                        while($row1 = mysql_fetch_array($result1)) { ?>
					<tbody>
						<tr>
							<th scope="row"><?php   echo $row1[0];  ?></th>
							<td><?php      echo $row1[1];  ?></td>
                            <td><?php      echo $row1[3];  ?></td>
							
							<td class="text-center" >
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php   echo $row1[0];  ?>">
                                    <i class="fa fa-magic"></i>&nbsp; Cek Progress</button>

                                
																	<?php 
																	include 'config.php';
																	$kuki = $row1[0];
																	$query2  = "SELECT * FROM user WHERE nrp='$kuki' ";
																	$result2 = mysql_query($query2) or die('Error, query failed'); 
																	$row2 = mysql_fetch_array($result2)
																?>
									<div class="modal fade" id="<?php   echo $row1[0];  ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-md" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="mediumModalLabel">Cek Progress</h5>
																	
																	<button type="button" class="open" data-dismiss="modal" aria-label="Open">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<div class="login-content">
																			<div class="login-logo">
																					<img src="fotouser/<?php echo $row2[2]; ?>" class="img-circle">
																				</div>
																	<div class="login-form">
																		<div class="row form-group">
																					<div class="col col-md-4 .offset-md-1">
																						<label class=" form-control-label">Nama</label>
																					</div>
																					<div class="col-12 col-md-7">
																						<p class="form-control-static"><?php echo $row2[1]; ?></p>
																					</div>
																			</div>
																			<div class="row form-group">
																					<div class="col col-md-4 .offset-md-1">
																						<label class=" form-control-label">NRP</label>
																					</div>
																					<div class="col-12 col-md-7">
																						<p class="form-control-static"><?php echo $row2[0]; ?></p>
																					</div>
																			</div>
																			<div class="row form-group">
																					<div class="col col-md-4 .offset-md-1">
																						<label class=" form-control-label">Kelas / Prodi</label>
																					</div>
																					<div class="col-12 col-md-7">
																						<p class="form-control-static"><?php echo $row2[3]." / ".$row2[5]; ?></p>
																					</div>
																			</div>
																			<div class="row form-group">
																					<div class="col col-md-4 .offset-md-1">
																						<label class=" form-control-label">Judul</label>
																					</div>
																					<div class="col-12 col-md-7">
																						<p class="form-control-static"><?php echo $row2[7]; ?></p>
																					</div>
																			</div>
																			<div class="row form-group" style="padding-top: 30px;">
																					<?php 
																						include 'config.php';
														   
																						$query  = "SELECT * FROM proposal WHERE nrp='$kuki' ";
																						$result = mysql_query($query) or die('Error, query failed'); 
																						$row = mysql_fetch_array($result);
																					?>
																					<div class="col col-md-4">
																						<label class=" form-control-label">Proposal</label>
																					</div>
																					<div class="col-12 col-md-7">
																						<p class="text-center"><a href="downloadproposal.php?id=<?php echo $row[0] ?>"><?php echo $row[2] ?></a></p>
																					</div>
																					<div class="col-12 col-md-1">
																						<p class="form-control-static"><a href="deleteproposalu.php?del=<?php echo $row[0]; ?>">
																							<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
																								<i class="zmdi zmdi-delete"></i>
																							</button>
																							</a>
																						</p>
																					</div>
																			</div>
																			<div class="row form-group">
																					<?php 
																						include 'config.php';
														   
																						$query  = "SELECT * FROM penelitian WHERE nrp='$kuki' ";
																						$result = mysql_query($query) or die('Error, query failed'); 
																						$row = mysql_fetch_array($result);
																					?>
																					<div class="col col-md-4">
																						<label class=" form-control-label">Penelitian</label>
																					</div>
																					<div class="col-12 col-md-7">
																						<p class="text-center"><a href="downloadpenelitian.php?id=<?php echo $row[0] ?>"><?php echo $row[2] ?></a></p>
																					</div>
																					<div class="col-12 col-md-1">
																						<p class="form-control-static"><a href="deletepenelitianu.php?del=<?php echo $row[0]; ?>">
																							<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
																								<i class="zmdi zmdi-delete"></i>
																							</button>
																							</a>
																						</p>
																					</div>
																			</div>
																			<div class="row form-group">
																					<?php 
																						include 'config.php';
														   
																						$query  = "SELECT * FROM hasilakhir WHERE nrp='$kuki' ";
																						$result = mysql_query($query) or die('Error, query failed'); 
																						$row = mysql_fetch_array($result);
																					?>
																					<div class="col col-md-4">
																						<label class=" form-control-label">Hasil Akhir</label>
																					</div>
																					<div class="col-12 col-md-7">
																						<p class="text-center"><a href="downloadhasilakhir.php?id=<?php echo $row[0] ?>"><?php echo $row[2] ?></a></p>
																					</div>
																					<div class="col-12 col-md-1">
																						<p class="form-control-static"><a href="deletehasilakhiru.php?del=<?php echo $row[0]; ?>">
																							<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
																								<i class="zmdi zmdi-delete"></i>
																							</button>
																							</a>
																						</p>
																					</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
								
								
								
								
								
								
                            </td>
							
							<td class="text-center"><a href="deleteuser.php?del=<?php echo $row1[0]; ?>">Hapus</a></td>
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