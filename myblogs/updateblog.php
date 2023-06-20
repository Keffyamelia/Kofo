<!DOCTYPE html>
<html>
	<head>
		<title>Edit My Blog</title>
		<link rel='stylesheet' href='./css/bootstrap.min.css'>
		<script src='./js/jquery-3.5.1.min.js'></script>
		<script src='./js/popper.min.js'></script>
		<script src='./js/bootstrap.min.js'></script>
	</head>
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

		$id = "";
		if (isset($_GET['blog'])){
			$id = $_GET['blog'];
		} 
		
		$sq = "SELECT * FROM myblog WHERE blogid='$id'";
		//echo $sq;
		$results = mysqli_query($conn, $sq);
		
		if (mysqli_num_rows($results) > 0) {
			while ($row = mysqli_fetch_assoc($results)) {
	?>
	<body class='bg-white'>
		<form class='bg-light' method='POST' action='updateblog_pro.php' 
		style='margin: 50px; padding: 20px; border: 1px solid black'>
			<h1 class='text-center'>Edit Blog Form</h1>
			<div>
				<label for='author' class='control-form'>Author:</label>
				<input type='text' class='form-control' name='author' 
				id='author' value='<?php echo $row['author'];  ?>' required>
				<input type='hidden' id='blogid' name='blogid' 
				value='<?php echo $row['blogid']; ?>'>
			</div>
			<div>
				<label for='title' class='control-form'>Title:</label>
				<input type='text' class='form-control' name='title' 
				id='title' value='<?php echo $row['title'];  ?>' required>
			</div>
			<div>
				<label for='cat' class='control-form'>Category:</label>
				<input type='text' class='form-control' name='cat' id='cat' 
				 value='<?php echo $row['category'];  ?>'>
			</div>
			<div>
				<label for='blog' class='control-form'>Article:</label>
				<textarea rows=20 name='blog' id='blog' class='form-control' 
				required>
				 <?php echo $row['content'];  ?>
				</textarea>
			</div>
			<div>
				<label for='dt' class='control-form'>Date Posted:</label>
				<input type='date' class='form-control' name='dt' id='dt' 
				value='<?php echo $row['lastupdate']; ?>'>
			</div>
			<br>
			<div>
				<input type='submit' class='btn btn-success' name='submit' 
				id='submit' value='Save Edit'>
			</div>
		</form>
		<?php
			} // end of while loop
		} // end of if statement
		echo "<br><br>";
		echo "<a href='myblog.php' class='btn btn-danger'>Back Home</a>";
		echo "<br><br>";
		?>
	</body>
</html>

