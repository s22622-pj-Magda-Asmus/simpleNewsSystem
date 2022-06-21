<?php
    //Open connection to database.
    $mysqli = new mysqli("localhost", "root", "", "myposts");
    if(mysqli_connect_errno()){
        die("Could not resolve mysql connection.");
    }
?>
