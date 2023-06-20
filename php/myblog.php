<?php
$servername = "localhost";
$username = "root";
$password = "";
$db =  "myblog";

$conn = mysqli_connect($servername, $username, $password);

//Test the connnection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql =  "CREATE DATABASE IF NOT EXISTS myblog";
$res = mysqli_query($conn, $sql);

//Check if the database was created
if (!$res){
    die ("Error: unable to create database");
}
//Activate myblog database
if (!mysqli_query($conn, "USE myblog")){
    die ("Error: unable to activate database");
}

//Create the table
$sq2 = "CREATE TABLE IF NOT EXISTS myblog (
    blogid  INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    author VARCHAR(50) NOT NULL,
    title VARCHAR(200) NOT NULL,
    content TEXT (500) NOT NULL,
    views INT NULL,
    category VARCHAR(50) NOT NULL,
    lastupdate DATE NULL,
    tags  VARCHAR(200) NULL,
    comments VARCHAR(200) NULL,
    commentby  VARCHAR(50) NULL
    )";

    $res2 = mysqli_query($conn, $sq2);
    //Check if the table was created
    if ($res2){
        echo "<div>;"
        echo "<a href='uploadblog.php' class="btn btn-danger">Upload</a>";
        echo "<a href='updateblog.php' class="btn btn-success">Update</a>";
        echo "<a href='deleteblog.php' class="btn btn-primary">Delete</a>";
        echo "</div>";
        echo "Table created successfully";
    } else {
        echo ("Error: unable to create table. " . mysqli_error($conn));
    }

    $sq3 = "SELECT * FROM myblog";
    $results  = mysqli_query($conn, $sq3);

    $counter = 1;

    if (mysqli_num_rows($results) > 0) {
        echo "<table border=0>";
        
        while($row = mysqli_fetch_assoc($results)) {
            echo  "<tr>";
            echo "<td>" . $counter .  "</td>";
            echo "<td>" . $row["author"] . "</td>";
            echo "<td><a href="displayblog.php?blgid=" . $id . "">" . $row["title"] . "</a></td>";
            echo "<td>" . $row["category"] . "</td>";
            echo "<td>" . $row["lastupdate"] . "</td>";

            echo "<td><a href="updateblog.php?blog="  . $id .  "" class="btn btn-sucess">Edit</a></td>";

            echo "<td><a href='deleteblog.php?blogid="  . $id .
            echo "</tr>";
            $counter++;
        }
        echo "</table>";
        }
     else {
        echo "No  record found";
    }
    
    mysqli_close($conn);
    




?>