<?php
$con= new mysqli('localhost','root','','crud');

if($con==false)
{
   
    die(mysqli_error($con));
}



?>