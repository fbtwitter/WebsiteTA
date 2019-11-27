<?php 
include 'config.php';
if(isset($_POST['upload'])) 
{ 
		$uploadDir ='C:\xampp3\htdocs\websitetugasakhir2018\fotouser/';
		$nrp=$_POST['nrp'];
		$nama=$_POST['nama'];
		$kelas=$_POST['kelas'];
		$prodi=$_POST['prodi'];
		$dosen=$_POST['dosen'];
		$judulta=$_POST['judulta'];
		$username=$_POST['username'];
        $tahunlulus=$_POST['tahunlulus'];
		$foto=$_FILES['userfile']['name'];
		$password=$_POST['password'];
		
		$fileName = $_FILES['userfile']['name']; 
        $tmpName  = $_FILES['userfile']['tmp_name']; 
        $fileSize = $_FILES['userfile']['size']; 
        $fileType = $_FILES['userfile']['type']; 

        $filePath = $uploadDir . $fileName;
		echo $filePath;

        $result = move_uploaded_file($tmpName, $filePath); 
        if (!$result) { 
            echo "Gagal Upload"; 
            exit; 
        }
		echo $foto;
		
		if(1){
        $query = "INSERT INTO user (nrp, nama, foto, kelas, tahunlulus, prodi, dosen, judulta, username, password) ". 
                 "VALUES ('$nrp', '$nama', '$foto', '$kelas', '$tahunlulus', '$prodi', '$dosen', '$judulta', '$username', '$password')"; 

        mysql_query($query) or die(mysql_error());                     
        
		mysql_close($conn);
		
		echo "<script type='text/javascript'>alert('Akun sudah terbuat');document.location='admin.php'</script>";
        }
}		
?> 