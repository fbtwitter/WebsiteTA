<?php
include "config.php";
$nrp  = $_GET['id'];

$query 	= "SELECT judul, SIZE, TYPE, CONTENT FROM penelitian WHERE nrp = '$nrp'"; 
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