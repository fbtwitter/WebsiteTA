<html> 
<head> 
<title>Upload File To MySQL Database</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<style type="text/css"> 
<!-- 
.box { 
    font-family: Arial, Helvetica, sans-serif; 
    font-size: 12px; 
    border: 1px solid #000000; 
} 
--> 
</style> 
</head> 

<body> 
<?php 
include 'config.php';
if(isset($_POST['upload'])) 
{ 
		$judul=$_POST['judul'];
		$pengarang=$_POST['pengarang'];
		$abstrak=$_POST['abstrak'];
        $fileName = $_FILES['userfile']['name']; 
        $tmpName  = $_FILES['userfile']['tmp_name']; 
        $fileSize = $_FILES['userfile']['size']; 
        $fileType = $_FILES['userfile']['type']; 
        
		$fp = fopen($tmpName, 'r'); 
        $content = fread($fp, $fileSize); 
        $content = addslashes($content); 
        fclose($fp); 
         
		
        $query = "INSERT INTO jurnal (JUDUL, PENGARANG, ABSTRAK, NAME, SIZE, TYPE, CONTENT) ". 
                 "VALUES ('$judul', '$pengarang', '$abstrak', '$fileName', '$fileSize', '$fileType', '$content')"; 

        mysql_query($query) or die(mysql_error());                     
        
		mysql_close($conn);
		
        echo "<br>File $fileName uploaded<br>"; 
}         
?> 
<form action="uploadjurnal.php" method="POST" enctype="multipart/form-data" name="uploadform"> 
  <table width="350" border="0" cellpadding="1" cellspacing="1" class="box"> 
	<tr>
		<td width="20%">Judul</td><td><input type="text" size="30" name="judul" id="judul"></td>
	</tr>	
	<tr>
		<td width="20%">Penulis</td><td><input type="text" size="30" name="pengarang" id="pengarang"></td>
	</tr>
	<tr>
		<td width="20%">Sinopsis</td><td><input type="text" size="30" name="abstrak" id="abstrak"></td>
	</tr>
	<tr>  
      <td width="246"><input type="hidden" name="MAX_FILE_SIZE" value="2000000"><input name="userfile" type="file" class="box" id="userfile"> 
         </td> 
      <td width="80"><input name="upload" type="submit" class="box" id="upload" value="  Upload  "></td> 
    </tr> 
  </table> 
</form> 
</body> 
</html>
