<?php
	include 'config.php';
    // how many rows to show per page
    $rowsPerPage = 10;
    // by default we show first page
    $pageNum = 1;

    // if $_GET['page'] defined, use it as page number
    if(isset($_GET['page']))
    {
        $pageNum = $_GET['page'];
    }
    // counting the offset
    $offset = ($pageNum - 1) * $rowsPerPage; 
    $query  = "SELECT * FROM proposal ORDER BY 'nrp' ASC LIMIT $offset, $rowsPerPage";
    $result = mysql_query($query) or die('Error, query failed'); 
	//jumlah total
	$query1   = "SELECT COUNT(nrp) AS numrows FROM proposal";
    $result1  = mysql_query($query1) or die('Error, query failed');
    $row1     = mysql_fetch_array($result1, MYSQL_ASSOC);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>
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
				<div class="menu-atas row">
					<a href=""><button type="button" class="btn btn-warning btn-lg"><i style="font-size:24px" class="fa fa-home"></i> Home</button></a>
					<a href=""><button type="button" class="btn btn-secondary btn-lg"><i style="font-size:24px" class="fa fa-newspaper-o"></i> Posting Berita</button></a>
					<a href=""><button type="button" class="btn btn-warning btn-lg"><i style="font-size:24px" class="fa fa-file-text-o"></i> Posting Pengumuman</button></a>
				</div>
				<br>
				<div class="judul">
					<h5>
						<strong>Daftar Dokumen Tugas Akhir</strong>
					</h5>
				</div> 
				<div class="row">
					<div class="col-md-8"></div>
					<a href="">
						<button type="button" class="btn btn-dark">
							<i class=" fa fa-user"></i> Input Pengumuman Baru</button>
					</a>
				</div>
				<br>
				<table class="table">
					<thead class="thead bg-primary text-center">
						<tr style="color:white;">
							<th scope="col">No</th>
							<th scope="col">NRP</th>
							<th scope="col">Nama</th>
							<th scope="col">Proposal</th>
						</tr>
					</thead>
					<tbody>
					
					<?php
						$no=1;
						while($hasil=mysql_fetch_array($result,MYSQL_ASSOC)) { 
					?>
						<tr>
							<th scope="row"><?php echo $no;?></th>
							<td><?php echo $hasil['nrp']; ?></td>
							
							<td><a href="cobadownloadproposal.php?id=<?php echo $hasil['nrp'] ?>">Download</a></td>
							
							<?php
								echo "<td>".'<a href="deletedokta.php?del='.$hasil['nrp'].'">Delete</a>'."</td>";
							?>
						</tr>
						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
	
	</html>
	
	<?php
		// how many rows we have in database
			$query   = "SELECT COUNT(nrp) AS numrows FROM proposal";
			$result  = mysql_query($query) or die('Error, query failed');
			$row     = mysql_fetch_array($result, MYSQL_ASSOC);
			$numrows = $row['numrows'];
		// how many pages we have when using paging?
			$maxPage = ceil($numrows/$rowsPerPage);

		// print the link to access each page
			$self = $_SERVER['PHP_SELF'];
			$nav = '';
			for($page = 1; $page <= $maxPage; $page++)
			{
				if ($page == $pageNum)
				{
					$nav .= " $page ";   // no need to create a link to current page
				}
				else
				{
					$nav .= " <a href=\"$self?page=$page\">$page</a> ";
				}       	 
			}
		// creating previous and next link
		// plus the link to go straight to
		// the first and last page
			if ($pageNum > 1)
			{
				$page = $pageNum - 1;
				$prev = " <a href=\"$self?page=$page\">[Prev]</a> ";
				$first = " <a href=\"$self?page=1\">[First Page]</a> ";
			} 
			else
			{
				$prev  = '&nbsp;'; // we're on page one, don't print previous link
				$first = '&nbsp;'; // nor the first page link
			}	
	
			if ($pageNum < $maxPage)
			{
				$page = $pageNum + 1;
				$next = " <a href=\"$self?page=$page\">[Next]</a> ";
				$last = " <a href=\"$self?page=$maxPage\">[Last Page]</a> ";
			} 
			else
			{
				$next = '&nbsp;'; // we're on the last page, don't print next link
				$last = '&nbsp;'; // nor the last page link
			}
		// print the navigation link
			echo "<center>$first "." $prev "." $nav "." $next "." $last</center>"; 
		?>
        <?php       
			mysql_close($conn);
		?>
	
	

	<a href="#" class="back-to-top">
		<i class="fa fa-chevron-up"></i>
	</a>

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