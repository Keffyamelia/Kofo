<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myblogs";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Test the connection 
if(!$conn){
	die ("The connection is not successfull." . mysqli_connect_error());
}
echo "<h3>Connected to database successfully.</h3>";

$tit = $_POST['title'];
$cat = $_POST['cat'];
$blg = $_POST['blog'];
$dat = $_POST['dt'];
$aut = $_POST['author'];
//$pdt = $_POST['posted_dt'];

$sq = "INSERT INTO myblog (author, title, content, category, lastupdate)  
		VALUES('$aut', '$tit', '$blg', '$cat', '$dat')";

if (mysqli_query($conn, $sq)){
	echo "<h3>Your blog has been uploaded successfully.</h3>";
} else {
	echo "<h3>Error: unable to upload the blog." . mysqli_error($conn) . 
	"</h3>";
}
mysqli_close($conn);
echo "<a href='myblog.php' class='btn btn-primary'>Back Home</a>";


?>