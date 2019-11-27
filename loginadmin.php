<?php
// we must never forget to start the session
session_start();

$errorMessage = '';
if (isset($_POST['un']) && isset($_POST['pw'])) {
    include 'config.php';
    
    $username = $_POST['un'];
    $password = $_POST['pw'];
    
    // check if the user id and password combination exist in database
    $sql = "SELECT * 
            FROM admin
            WHERE username = '$username' AND password = '$password'";
    
    $result = mysql_query($sql) or die('Query failed. ' . mysql_error()); 
    
    if (mysql_num_rows($result) == 1) {
        // the user id and password match, 
        // set the session
        $_SESSION['db_is_logged_in'] = true;
        
        // after login we move to the main page
		echo "<script type='text/javascript'>alert('Login Sukses!');document.location='admin.php'</script>";
        exit;
    } else {
		echo "<script type='text/javascript'>alert('Sorry, wrong username id / password!');document.location='loginadmin.php'</script>";
        $errorMessage = 'Sorry, wrong user id / password';
    }
	mysql_close($conn);
}
?>


<html>
<head>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">LOGIN ADMIN</h2>
			
        </div>
        <div class="artikel">
            <form action="" method="post" name="frmLogin" id="frmLogin">
                <div class="grup">
                    <label for="username">Username</label>
                    <input name="un" type="text" id="un" placeholder="Masukkan username Anda">
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input name="pw" type="password" id="pw" placeholder="Masukkan password Anda">
                </div>
                <div class="grup">
                    <input name="btnLogin" type="submit" id="btnLogin" value="Login">					
                </div>
            </form>
        </div>
    </div>
</body>
</html>