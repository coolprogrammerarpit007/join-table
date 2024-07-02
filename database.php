<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";


    $conn = new mysqli($localhost,$username,$password);

    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }

    $sql = "CREATE DATABASE COMPANY";

    if($conn->query($sql)){
        echo "Company Database is created sucessfully!";
    }
    else{
        echo "Unsucessful, attempt to create the database.";
    }

    $conn->close();