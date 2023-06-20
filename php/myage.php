<?php
$age = 30;

if($age >= 20){
    echo "You are an adult.";
} elseif ($age >= 12 && $age < 20){
    echo "You are a teenager.";
} elseif ($age >= 4 && $age < 13){
    echo "You are a pre-teen age group.";
} elseif ($age >= 2 && $age <  4){
    echo "You are a toddler.";
} else {
    echo "You are a baby";
}

?>