<?php
//Variables for connecting to the  database;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerdetail";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection to the database was a success!";

$sq = "SELECT sn, fullname, email FROM customerdetail";
$results = mysqli_query($conn, $sq);

if (mysqli_num_rows($results) > 0) {
    echo "<table>";
    echo "<thead>";
    echo "th>SN</th>";
    echo "<th>Fullname</th>";
    echo "<th>Email</th>";
    echo "</thead>";
    
    while($row = mysqli_fetch_assoc($results)) {
        echo  "<tr>";
        echo "<td>" . $row["sn"] . "</td>";
        echo "<td>" . $row["fullname"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
 else {
    echo "No  record found";
}

mysqli_close($conn);


?>