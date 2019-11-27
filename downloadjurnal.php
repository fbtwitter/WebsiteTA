<?php
include "config.php";
$ID    = $_GET['id'];
$kueri="select hits from jurnal where ID='$ID'";
$hasil = mysql_query($kueri) or die(mysql_error());
$baris = mysql_fetch_array($hasil);
print_r($baris);

$hits="UPDATE jurnal SET hits=$baris[0]+1 WHERE ID='$ID'";
$hasil1 = mysql_query($hits) or die(mysql_error()); 



$query 	= "SELECT NAME, SIZE, TYPE, CONTENT FROM jurnal WHERE ID = '$ID'"; 
$result = mysql_query($query) or die(mysql_error()); 
list($NAME, $SIZE, $TYPE, $CONTENT) = mysql_fetch_array($result); 

header("Content-Transfer-Encoding: binarynn"); 
header("Pragma: no-cache"); 
header("Expires: 0");
header('Content-Disposition: attachment; filename="' . $NAME . '"');
echo $CONTENT; 
header('Location: index.php');
exit();
?>

