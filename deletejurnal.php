<?php
include 'config.php';
	if(($_GET['del']))
	{
		$id=(int)$_GET['del'];
		$queri = "DELETE FROM jurnal WHERE id='$id'";
		mysql_query($queri, $conn);
		echo "<script type='text/javascript'>alert('Sudah dihapus');document.location='admin.php'</script>";
		exit;
	}
?>
