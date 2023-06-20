<?php
echo "<style>";
    echo "a{";
        echo "padding-left: 25px;";
        echo "padding-right: 25px;";
    echo "}";
    echo "</style>";
//mainmenu function to display function on every page
function mainmenu($page) {
echo "<div>";
    echo "<a href='include.php'>Home</a>";
    echo "<a href='#'>About us</a>";
    echo "<a href='#'>Products</a>";
    echo "<a href='#'>Contact us</a>";
echo "</div>";
echo "<h1>$page</h1>";
}
//mainmenu("Home Page"); //call the function
?>