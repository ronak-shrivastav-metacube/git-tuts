<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];

    echo "Your name is : ".$name." Your Age is  : ".$age;
}
