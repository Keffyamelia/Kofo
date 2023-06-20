<?php
$cnt = 0;
$sum = 0;

while($cnt < 20){
    $cnt++;

    if($cnt % 2 == 0){
        $sum = $sum + $cnt;
        echo $cnt;
        echo "<br>";
    }
}
echo "The sum of all the even numbers is: ".$sum;



echo "<br>";
$a = 70;
$b = 100;

if ($a > $b){
    echo "Variable b is greater";
} else  {
    echo "Variable b is greater";
}



?>

