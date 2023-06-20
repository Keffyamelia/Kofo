<?php
//let's first connect to the database
$servername = "localhost";
$username = "root";
$password = "";

//creating a connection to the MYSQL server

$link = mysqli_connect ($servername, $username, $password);

//check the connection

if ($link === false) {
    die("Error: could not connect." . mysqli_connect_error());
}

//create your database

$sql = "CREATE DATABASE IF NOT EXISTS tododb";

if(mysqli_query($link, $sql)) {
    echo "Database created succesfully";
}else{
    echo "Error: could not create database." . mysqli_error($link);
}

//let us create a table
$sql2 = "USE tododb";
if (mysqli_query($link, $sql2)) {
    echo "<br>";
    echo "Database now active.";
}

//let us create a table
$sql3 = "CREATE TABLE IF NOT EXISTS todo(
    sn INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    activity VARCHAR(100) NOT NULL,
    dt DATE  NOT NULL,
    hr INT NULL,
    mt INT NULL,
    se INT NULL,
    status BOOLEAN NULL,
    remark VARCHAR(200)
    )";

    if (mysqli_query($link, $sql3)) {
        echo "<br>";
        echo "Table created succesfully.";
    }else {
        echo "<br>";
        echo "Error: Could not create table. " .mysqli_error($link);
    }

    //let us display the content of the table todo.
    $sql4 = "SELECT * FROM TODO";
    $res = mysqli_query($link, $sql4);

    if (mysqli_num_row($res) > 0) {
        echo "<table>";
        echo "<thead>";
        echo "<th>SN</th>";
        echo "<th>ACTIVTIES</th>";
        echo "<th>DATE</th>";
        echo "<th>TIME</th>";
        echo "<th>STATUS</th>";
        echo "<th>REMARK</th>";
        echo "</thead>";
        

    }
    mysqli($link);





?>
