<?php
include 'config.php';
	if(($_GET['del']))
	{
		$nrp=(int)$_GET['del'];
		$queri = "DELETE FROM user WHERE nrp='$nrp'";
		mysql_query($queri, $conn);
		echo "<script type='text/javascript'>alert('Akun sudah dihapus');document.location='admin.php'</script>";
		exit;
		
	}
?>
