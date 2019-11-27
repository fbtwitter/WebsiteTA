<?php
include "config.php";
$nrp    = $_GET['id'];
$query 	= "SELECT namaproposal, type, size, content FROM proposal WHERE nrp = '$nrp'"; 
$result = mysql_query($query) or die(mysql_error()); 
list($namaproposal, $type, $size, $content) = mysql_fetch_array($result); 

header("Content-Transfer-Encoding: binarynn"); 
header("Pragma: no-cache"); 
header("Expires: 0");
header('Content-Disposition: attachment; filename="' . $namaproposal . '"');
echo $content; 
exit();
?>

