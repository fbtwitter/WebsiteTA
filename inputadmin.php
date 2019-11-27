<?php include 'config.php';
    
    if(isset($_POST['upload'])) {
        $uploadDir ='C:\xampp3\htdocs\websitetugasakhir2018\news/';
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

		$judul=$_POST['judul'];
        $foto=$_FILES['userfile']['name'];
		$berita=$_POST['berita'];
		
		echo $foto;
		
        if(1) {
			$query = "INSERT INTO news (JUDUL, FOTO, BERITA) ". 
                 "VALUES ('$judul', '$foto', '$berita')"; 
            mysql_query($query) or die(mysql_error());                     
        
			mysql_close($conn);
			
			//echo "<script type='text/javascript'>alert('Uploaded !');document.location='admin.php'</script>";
        } else {
            echo "<script type='text/javascript'>alert('Salah ');document.location='admin.php'</script>";;
        }
		
    }
?>                                            