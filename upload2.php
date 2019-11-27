<?php 
include 'config.php';
if(isset($_POST['upload'])) 
{ 
		session_start();
		$kuki=$_SESSION['user'];
		$ket=$_POST['keterangan'];
        $fileName = $_FILES['userfile']['name']; 
        $tmpName  = $_FILES['userfile']['tmp_name']; 
        $fileSize = $_FILES['userfile']['size']; 
        $fileType = $_FILES['userfile']['type']; 
        
		$fp = fopen($tmpName, 'r'); 
        $content = fread($fp, $fileSize); 
        $content = addslashes($content); 
        fclose($fp); 
         
		
        $query = "INSERT INTO penelitian (NRP, KETERANGAN, JUDUL, SIZE, TYPE, CONTENT) ". 
                 "VALUES ('$kuki', '$ket', '$fileName', '$fileSize', '$fileType', '$content')"; 

        mysql_query($query) or die(mysql_error());                     
        
		mysql_close($conn);
		
        echo "<script type='text/javascript'>alert('Uploaded!');document.location='index.php'</script>";  
}         
?>