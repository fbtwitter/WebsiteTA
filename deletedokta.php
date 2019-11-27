<?php
include 'config.php';
	if(($_GET['del']))
	{
		$nrp=(int)$_GET['del'];
		$queri = "DELETE FROM dokumenta WHERE id='$nrp'";
		mysql_query($queri, $conn);
		echo "<script type='text/javascript'>alert('Sudah dihapus');document.location='admindokumenta.php'</script>";
		exit;
		
	}
?>
