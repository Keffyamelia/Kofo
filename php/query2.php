<?php session_start();
if ($_SESSION["userstatus"] != "approveduser"){
    die "You are a hacker. Please log in properly.";
}
$myid = $_GET['id'];
$myname = $_GET['n'];
$myage =  $_GET['age'];

echo "My "