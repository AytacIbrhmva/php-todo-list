<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="todolist";
    $connect=mysqli_connect($server,$username,$password,$database);

    if($connect) {
        // echo "Connected";
    } else {
        die(mysqli_error($connect));
    }
?>