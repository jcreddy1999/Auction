<?php
session_start();
require_once("../../includes/dbconn.php");
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($conn,$sql);


// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['username']= $myusername;
	$_SESSION['auction_admin_id']=$id;
	
		header("location:../index.php");
}
else {
echo "Wrong Username or Password";
}
?>