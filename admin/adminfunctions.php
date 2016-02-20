<?php

function mysqlexec($sql){
	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="farmercart"; // Database name

// Connect to server and select databse.
	$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");

	mysqli_select_db($conn,"$db_name")or die("cannot select DB");

	if($result = mysqli_query($conn, $sql)){
		return $result;
	}
	else{
		return false;
	}


}

function addcat(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$cat=$_POST['catname'];
		$descr=$_POST['catdescr'];
		
		$sql = "INSERT INTO category (id, cat, descr) VALUES ('', '$cat', '$descr')";
		$result=mysqlexec($sql);
		if ($result) {
		  echo "Successfully Added Category";
		  echo "<a href=\"addcat.php\">";
		  echo "Add another category";
		  echo "</a>";
		} else {
		  echo "Error: " . $sql . "<br>" . $result;
		}

	}

}


function addprod(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name=$_POST['name'];
		$descr=$_POST['descr'];
		$cat=$_POST['cat'];
		$price=$_POST['price'];
		$offerprice=$_POST['offerprice'];
		$unit=$_POST['unit'];
		$qty=$_POST['qty'];
		$visibility=$_POST['visibility'];
		$seller=$_SESSION['id'];

		//photoupload function
		photoupload($seller);
		
		
	}

}

function photoupload($seller){
		$sql="SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'farmercart' AND TABLE_NAME = 'product'";
		$result=mysqlexec($sql);

		$row=mysqli_fetch_array($result);
		//finding last inserted row id/product id
		$lastid=$row[0];

		$target = "../products/" . $seller . "/" .  $lastid ."/";
		if (!file_exists($target)) {
		    mkdir($target, 0777, true);
		}
		//specifying target for each file
		$target1 = $target . basename( $_FILES['pic1']['name']);
		$target2 = $target . basename( $_FILES['pic2']['name']);
		$target3 = $target . basename( $_FILES['pic3']['name']);
		$target4 = $target . basename( $_FILES['pic4']['name']);
		$target5 = $target . basename( $_FILES['pic5']['name']);


		// This gets all the other information from the form
		$pic1=($_FILES['pic1']['name']);
		$pic2=($_FILES['pic2']['name']);
		$pic3=($_FILES['pic3']['name']);
		$pic4=($_FILES['pic4']['name']);
		$pic5=($_FILES['pic5']['name']);

		// Writes the photo to the server
		if(move_uploaded_file($_FILES['pic1']['tmp_name'], $target1)&&move_uploaded_file($_FILES['pic2']['tmp_name'], $target2)&&move_uploaded_file($_FILES['pic3']['tmp_name'], $target3)&&move_uploaded_file($_FILES['pic4']['tmp_name'], $target4)&&move_uploaded_file($_FILES['pic5']['tmp_name'], $target5))
		{

		// Tells you if its all ok
		$uploaded="The files has been uploaded, and your information has been added to the directory";
		return $uploaded;
		}
		else {

		// Gives and error if its not
		$uploaded="Sorry, there was a problem uploading your file.";
		return $uploaded;
		}
		
}
?>