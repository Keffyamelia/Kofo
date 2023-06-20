<?php
$myname = "Olamide Baddo";
$age = 30;

echo "Hello, my name is $myname";
echo "<h1>Hello $myname!</h1>";

if($age < 30){
    echo "You are a young man/woman";
} else{
    echo "You are an adult. You can play the game.";
}

$age = 25;
echo "<br>";

if($age >= 30){
    echo "You are an adult. You can play ALL games.<br>";
} elseif($age < 30 && $age > 18){
    echo "You are a young person. You can play game2.<br>";
} elseif ($age < 18 && $age >= 10){
    echo "You are still in secondary school.<br>";
} elseif ($age < 10 && $age > 6){
    echo "You are just in primary school. Don't play the game.<br>";
} else{
    echo "You are a complete baby.<br>";

}









$counter  = 0;


while($counter < 20){
    $counter = $counter + 1;

    if($counter % 2 == 1){
        //This is an odd number
        echo $counter;
        echo ",";
    } 
}

echo "<br>";
for($c = 0; $c < 4; $c++){
echo "I love PHP so much. It is interesting.<br>";
}


?>