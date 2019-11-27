<?php 
include 'config.php';
if(isset($_POST['upload'])) 
{ 
		$dari=$_POST['dari'];
		$untuk=$_POST['untuk'];
		$pesan=$_POST['pesan'];   
		
        $query = "INSERT INTO pengumuman (dari, untuk, pesan) ". 
                 "VALUES ('$dari', '$untuk', '$pesan')"; 

        mysql_query($query) or die(mysql_error());                     
        
		mysql_close($conn);
		
        echo "<script type='text/javascript'>alert('Uploaded!');document.location='admin.php'</script>";  
}         
?>