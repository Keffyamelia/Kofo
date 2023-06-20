<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

// Test the connection 
if(!$conn){
	die ("The connection is not successfull." . mysqli_connect_error());
}



$sq1 = "CREATE DATABASE IF NOT EXISTS myblogs";
$res = mysqli_query($conn, $sq1);

// Check if Database creation is successfull.
if(!$res){
	die ("Error: unable to create database.");
}

// Activate myblog database
if (!mysqli_query($conn, "USE myblogs")){
	die("Error: unable to activate the database.");
}

// Create Table myblog
$sq2 = "CREATE TABLE IF NOT EXISTS myblog(
		blogid INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		author VARCHAR(50) NOT NULL,
		title VARCHAR (200) NOT NULL,
		content TEXT (500) NOT NULL,
		views INT NULL,
		category VARCHAR (50) NOT NULL,
		lastupdate DATE NULL,
		tags VARCHAR(200) NULL,
		comment TEXT (300) NULL,
		commentby VARCHAR(50) NULL
		)";
$res2 = mysqli_query($conn, $sq2);

// Check if table has been created
if($res2){
	//echo "Table created successfully.";
} else {
	echo "Error: unable to create the table. " . mysqli_error($conn);
}

echo "<link rel='stylesheet' href='./css/bootstrap.min.css'>";
echo "<script src='./js/jquery-3.5.1.min.js'></script>";
echo "<script src='./js/popper.min.js'></script>";
echo "<script src='./js/bootstrap.min.js'></script>";

echo "<br><br>";
echo "<div class='m-5'>";
	echo "<div>";
		echo "<a href='uploadblog.php' class='btn btn-danger'>
			+Upload New Blog</a>";
	echo "</div>";

	$sq3 = "SELECT * FROM myblog";
	$results = mysqli_query($conn, $sq3);
	$msg = "";
	
	if (isset($_GET['msg'])){
		$msg = $_GET['msg'];
		echo "<h3 class='text-success'>" . $msg . "</h3>";
		$msg = "";
	} 
	
	$counter = 1;
	if (mysqli_num_rows($results) > 0) {
		echo "<table border=1 class='table table-responsive-sm 
		table-striped table-hover mt-5'>";
		while ($row = mysqli_fetch_assoc($results)) {
			echo "<tr>";
				$id = $row["blogid"];
				echo "<td>" . $counter . "</td>";
				echo "<td>" . $row['author'] . "</td>";
				echo "<td><a href='displayblog.php?blgid=" . $id . "'>" . 
				$row['title'] . "</a></td>";
				echo "<td>" . $row['category'] . "</td>";
				echo "<td>" . $row['lastupdate'] . "</td>";
				
				echo "<td><a href='updateblog.php?blog=" . $id . 
				"' class='btn btn-success'>Edit</a></td>";
				
				echo "<td><a href='deleteblog.php?blogid=" . $id . 
				"' class='btn btn-danger'>Delete</a></td>";
			echo "</tr>";
			$counter++;
		}
		echo "</table>";
	} else {
		echo "<h1>No record found.</h1>";
	}
echo "</div>";
mysqli_close($conn);










?>