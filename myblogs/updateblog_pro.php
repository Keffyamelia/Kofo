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

// Extract the blog id to update.
$tit = $_POST['title'];
$aut = $_POST['author'];
$con = $_POST['blog'];
$dat = $_POST['dt'];
$cat = $_POST['cat'];
$bid = $_POST['blogid'];

// write the query and run it.
$sq = "UPDATE myblog set title='$tit', author='$aut', category='$cat', content='$con', lastupdate='$dat' WHERE blogid='$bid'";
//echo $sq;

if (mysqli_query($conn, $sq)){
	$msg = "Blog updated successfully.";
} else {
	$msg = "Error: Unable to save update to the blog. " . mysqli_error($conn);
}

// Leave 2 empty lines
echo "<br><br>";
mysqli_close($conn);
$loc = "myblog.php?msg=" . $msg;

//link to go back home.
header ("location: myblog.php?msg=" . $msg);
?>