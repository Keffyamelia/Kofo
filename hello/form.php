<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <form method="POST" action="myphpform.html">
        <style='width: 300px; padding: 50px; margin: auto; border; 1px solid black'>                           
        <label for='fn'>Fullname:</label><br>
        <input type='text' id='fn' name='fn'><br>
        <br>
        <label for='ml'>Email:</label><br>
        <input type='email' id='ml' name='ml'><br>
        <br>
        <input type='submit' id='submit' name='submit' value='Submit'>
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['fn'];
    $email = $_POST['ml'];

    echo "Your name is: ".$name;
    echo "<br>";
    echo "Your email is: " . $email;
}

?></html
</body>
>
