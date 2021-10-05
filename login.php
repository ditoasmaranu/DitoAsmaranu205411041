<?php 
// include 'config.php';
$host="localhost";
$user="root";
$password="";
$db="aa";
$conn = new mysqli($host,$user,$password,$db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysql_query("select * from user where username='$username' && password='$password");
$cek = mysql_num_rows($login);
 
if(0<$cek){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php");	
}
 
?>