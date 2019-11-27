<?php
	include 'config.php';
   
    $query  = "SELECT * FROM pengumuman";
    $result = mysql_query($query) or die('Error, query failed'); 
	
	while($row = mysql_fetch_array($result)) {
		echo "------------------------------------<br>";
		echo "Dari	: ".$row[1]."<br>";
		echo "Untuk	: ".$row[2]."<br><br>";
		
		echo "Pesan	: ".$row[3]."<br><br>";
		echo "------------------------------------<br>";
	}
	
?>	