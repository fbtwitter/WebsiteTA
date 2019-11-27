<?php
include 'config.php';
	if(($_GET['del']))
	{
		$nrp=(int)$_GET['del'];
		$queri = "DELETE FROM hasilakhir WHERE nrp='$nrp'";
		mysql_query($queri, $conn);
		echo "<script type='text/javascript'>alert('Dokumen sudah dihapus');document.location='admin.php'</script>";
		exit;
	}
?>
