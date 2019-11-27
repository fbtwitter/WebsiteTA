<?php
	include 'config.php';
    // how many rows to show per page
    $rowsPerPage = 2;
    // by default we show first page
    $pageNum = 1;

    // if $_GET['page'] defined, use it as page number
    if(isset($_GET['page']))
    {
        $pageNum = $_GET['page'];
    }
    // counting the offset
    $offset = ($pageNum - 1) * $rowsPerPage; 
    $query  = "SELECT * FROM jurnal ORDER BY 'ID' ASC LIMIT $offset, $rowsPerPage";
    $result = mysql_query($query) or die('Error, query failed'); 
	//jumlah total
	$query1   = "SELECT COUNT(ID) AS numrows FROM jurnal";
    $result1  = mysql_query($query1) or die('Error, query failed');
    $row1     = mysql_fetch_array($result1, MYSQL_ASSOC);
    
?>

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
						<strong>Daftar Jurnal Mahasiswa</strong>
					</h5>
                </div>
                <br>
                <form action="" method="post" role="form" class="contactForm">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <select name="Kategori" class="btn-dark">
                                <option value="judul">Judul</option>
                                <option value="pengarang">Pengarang</option>
                                <option value="katakunci">Kata Kunci</option>
                            </select>
                            <input type="text" placeholder="Masukkan Kata">
                            <button class="btn btn-custom">
                                <i style="font-size:20px" class="fa fa-search"></i>
                            </button>
                        </div>
                </form> 
				<br>
				<table class="table">
					<thead class="thead bg-primary text-center">
						<tr style="color:white;">
							<th scope="col">Judul</th>
							<th scope="col">Penulis</th>
							<th scope="col">Abstrak</th>
                            <th scope="col">File</th>
                            <th scope="col">Hits</th>
						</tr>
                    </thead>
                    <?php 
                        include 'config.php';
   
                        $query1  = "SELECT * FROM jurnal";
                        $result1 = mysql_query($query1) or die('Error, query failed'); 
                        while($row1 = mysql_fetch_array($result1)) { ?>
					<tbody>
						<tr>
							<th scope="row" class="text-center"><?php   echo $row1[1];  ?></th>
							<td class="text-center"><?php      echo $row1[2];  ?></td>
                            <td class="text-center">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php   echo $row1[0];  ?>">
                                  Detail
                                </button>

                                <div class="modal fade" id="<?php   echo $row1[0];  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle"><?php   echo $row1[1];  ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php   echo $row1[3];  ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                            <td class="text-center"><a href="downloadjurnal.php?id=<?php echo $row1[0] ?>">Download</a></td>
							<td class="text-center"><?php   echo $row1[8];  ?></td>
						</tr>

                        <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
	
	</html>

	<?php
		// how many rows we have in database
			$query   = "SELECT COUNT(judul) AS numrows FROM jurnal";
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