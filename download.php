<?php
include 'config.php';
if(isset($_GET['nrp'])) 
{ 
    $nrp      = $_GET['nrp']; 
    $query   = "SELECT fileproposal FROM dokumenta WHERE id = '$nrp'"; 
    $result  = mysql_query($query) or die('Error, query failed'); 
    $row = mysql_fetch_array($result); 

    header("Content-Disposition: attachment; filename"); 
    echo $content; 
    
    exit; 
} 

?> 
<html> 
<head> 
<title>Download File From MySQL</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
</head> 

<body> 
<?php 
include 'config.php'; 

$query  = "SELECT nrp, fileproposal FROM dokumenta"; 
$result = mysql_query($query) or die('Error, query failed'); 
if(mysql_num_rows($result) == 0) 
{ 
    echo "Database is empty <br>"; 
}  
else 
{ 
    while(list($id, $name) = mysql_fetch_array($result)) 
    { 
?> 
    <a href="download.php?id=<?php echo $nrp;?>"><?php echo $name;?></a> <br> 
<?php         
    } 
} 
mysql_close($conn);
?> 
</body> 
</html>
