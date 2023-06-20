<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myblogs";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Test the connection 
if(!$conn){
	die ("The connection is not successfull." . 
	mysqli_connect_error());
}
//echo "<h3>Connected to database successfully.</h3>";

// Extract the blog id to delete.
$bid = $_GET['blogid'];

// write the query and run it.
$sq = "DELETE FROM myblog WHERE blogid='$bid'";
if (mysqli_query($conn, $sq)){
	$msg = "Blog deleted successfully.";
} else {
	$msg = "Error: Unable to delete the blog. " . mysqli_error($conn);
}

// Leave 2 empty lines
echo "<br><br>";
mysqli_close($conn);
$loc = "myblog.php?msg=" . $msg;

//link to go back home.
header ("location: myblog.php?msg=" . $msg);
?>