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
echo "<h3>Connected to database successfully.</h3>";

$query = "CREATE TABLE IF NOT EXISTING comment (
    sn INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    comments TEXT(200) NOT NULL,
    commenter VARCHAR (100) NULL,
    posted_date DATE  NULL,
    status BOOLEAN NULL,
    reply INT NULL,
    blogid INT NOT NULL
    )";

    if(!mysqli_query($conn, $query))  {
        echo "Error:Unable to create the table. " . mysqli_error($conn);
    }

    $comment = $_POST['comment'];
    $name = $_POST['commenter'];
    $dt = date('Y-m-d');
    $id = $_POST['blogid'];

    $sql = "INSERT INTO comment (blogid, comments, commenter, posted_date, status) 
    VALUES('$id', '$comment',
    '$name', '$dt', 1)";

    if (mysqli_query($conn, $sql)){
        $msg  = "Your comment has been saved.";
    } else {
        $msg =  "Error: Unable to save your comment.";
    }

    mysqli_close($conn);

    header('location: displayblog.php?blgid='. $id);

    ?>
