<?php
include 'config.php';
	if(($_GET['del']))
	{
		$idnews=(int)$_GET['del'];
		$queri = "DELETE FROM news WHERE idnews='$idnews'";
		mysql_query($queri, $conn);
		echo "<script type='text/javascript'>alert('Sudah dihapus');document.location='admin.php'</script>";
		exit;
	}
?>
