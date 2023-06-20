<?php

$today = getdate();
print_r($today);

$tzn = date_default_timezone_get();

echo $tzn;

date_default_timezone_set('Africa/Lagos');

echo "<br><br>";

$tzn = date_default_timezone_get();

echo $tzn;

echo "<br><br>";

if (checkdate(04, 31, 2023)) {
    echo "Valid date!";
} else {echo "Invalid date";}


?>