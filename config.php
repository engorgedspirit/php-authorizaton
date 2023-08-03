<?php

    $host="localhost";
    $dbname="auth-sys";
    $user="root";
    $pass="mypass";
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    if($conn==true){
    }else{
        echo "Error with database connection";
    }
