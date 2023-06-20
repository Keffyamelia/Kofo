<!DOCTYPE html>
<html>
	<head>
		<title>Upload My Blog</title>
		<link rel='stylesheet' href='./css/bootstrap.min.css'>
		<script src='./js/jquery-3.5.1.min.js'></script>
		<script src='./js/popper.min.js'></script>
		<script src='./js/bootstrap.min.js'></script>
	</head>
	<body class='bg-white'>
		<form class='bg-light' method='POST' action='uploadblog_pro.php' 
		style='margin: 50px; padding: 20px; border: 1px solid black'>
			<h1 class='text-center'>Blog Upload Form</h1>
			<div>
				<label for='author' class='control-form'>Author:</label>
				<input type='text' class='form-control' name='author' 
				id='author' required>
			</div>
			<div>
				<label for='title' class='control-form'>Title:</label>
				<input type='text' class='form-control' name='title' 
				id='title' required>
			</div>
			<div>
				<label for='cat' class='control-form'>Category:</label>
				<input type='text' class='form-control' name='cat' id='cat'>
			</div>
			<div>
				<label for='blog' class='control-form'>Article:</label>
				<textarea rows=20 name='blog' id='blog' class='form-control' 
				required>
				</textarea>
			</div>
			<div>
				<label for='dt' class='control-form'>Date Posted:</label>
				<input type='date' class='form-control' name='dt' id='dt'>
			</div>
			<br>
			<div>
				<input type='submit' class='btn btn-success' name='submit' 
				id='submit' value='Publish Blog'>
				<a class='btn btn-danger' href='myblog.php'>Exit Upload</a>
			</div>
		</form>
	
	</body>
</html>


