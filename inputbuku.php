<?php 
include 'config.php';
if(isset($_POST['upload'])) 
{ 
		$judul=$_POST['judul'];
		$penulis=$_POST['penulis'];
		$sinopsis=$_POST['sinopsis'];
        $fileName = $_FILES['userfile']['name']; 
        $tmpName  = $_FILES['userfile']['tmp_name']; 
        $fileSize = $_FILES['userfile']['size']; 
        $fileType = $_FILES['userfile']['type']; 
        
		$fp = fopen($tmpName, 'r'); 
        $content = fread($fp, $fileSize); 
        $content = addslashes($content); 
        fclose($fp); 
         
		
        $query = "INSERT INTO buku (JUDUL, PENULIS, SINOPSIS, NAME, SIZE, TYPE, CONTENT) ". 
                 "VALUES ('$judul', '$penulis', '$sinopsis', '$fileName', '$fileSize', '$fileType', '$content')"; 

        mysql_query($query) or die(mysql_error());                     
        
		mysql_close($conn);
		
        echo "<script type='text/javascript'>alert('Uploaded!');document.location='admin.php'</script>";  
}         
?>