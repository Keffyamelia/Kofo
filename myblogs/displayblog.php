<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "myblogs";

$conn = mysqli_connect($servername, $username, $password, $db);

// Test the connection 
if(!$conn){
	die ("The connection is not successfull." . mysqli_connect_error());
}

echo "<html>";
	echo "<head>";
		echo "<link rel='stylesheet' href='./css/bootstrap.min.css'>";
		echo "<script src='./js/jquery-3.5.1.min.js'></script>";
		echo "<script src='./js/popper.min.js'></script>";
		echo "<script src='./js/bootstrap.min.js'></script>";
	echo "</head>";
	echo "<body class='bg-white'>";
echo "<br><br>";
echo "<div class='m-5'>";
	$id = "";

	if (isset($_GET['blgid'])){
		$id = $_GET['blgid'];
	} 
	
	$sq3 = "SELECT * FROM myblog WHERE blogid='$id'";
	
	//echo $sq3;
	
	$results = mysqli_query($conn, $sq3);
	$b = $rows['blogid'];
	if (mysqli_num_rows($results) > 0) {
		echo "<div>";
		while ($row = mysqli_fetch_assoc($results)) {

			    $b = $row["blogid"];
				echo $row["blogid"];
				echo "<br>";
				echo "<h1 class='text-danger'>" . $row['title'] . "</h1>";
				echo "Author: " . $row['author'] . " | Category: " . $row['category'] . 
				" | Last Update: " . $row['lastupdate'];
				echo "<br><br>";
				echo $row['content'];
				echo "<br><br>";
		}
		echo "</div>";
		echo "<hr>";
		echo "<h3>Comments</h3>";

		echo  "<form method='POST' action='comments_pro.php'>";
		echo  "<input type='text' id='commenter' nmae='commenter' 
		placeholder='Enter your name' class='form-control' required>";

		echo "<input type='hidden' id='blogid' name='blogid' value='" . $b  ."'>";
		echo "<textarea id='comment'  name='comment' class='form-control'  rows='5'></textarea>";
		echo "<br><input type='submit'  id='btncomment'  name='btncomment' value='Submit Comment'>";
		echo "<br>";
		echo  "</form>";

		$sql = "SELECT * FROM comment WHERE blogid='$id'";
		$res  = mysqli_query($conn, $sql);

		if  (mysqli_num_rows($res) > 0) {
			echo "<div>";
			while ($rows = mysqli_fetch_assoc($res))  {
				echo $rows["blogid"];
				echo "<br>";
				echo "<h3 class='text-danger'>" . $rows['commenter'] . "</h3>";
				echo "Date posted: " . $rows['posted_date'] . "<br>";
				echo $rows['comments'];
				echo  "<br><br>";

			}
		}
		echo "</div>";

		
	} else {
		echo "<h1>No record found.</h1>";
	}
	echo "<br><br><br>";
	echo "<a href='myblog.php' class='btn btn-danger'>Back Home</a>";
echo "</div>";
mysqli_close($conn);

echo "</body>";
echo "</html>";
?>