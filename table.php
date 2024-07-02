<?php

$localhost = "localhost";
$username = "root";
$password = "";
$my_DB = "COMPANY";


$conn = new mysqli($localhost,$username,$password,$my_DB);

if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}

// sql query to create table is the company database.

// Creating the employees table
// $sql = "CREATE TABLE employees(

// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// emp_name VARCHAR(30),
// salary INT,
// dept_id INT,
// manager_id INT
// ) ";

// // creating the department table

// $sql = "CREATE TABLE department(
// id INT,
// dept_name VARCHAR(100)

// )";

// Creating the manager table
// $sql = "CREATE TABLE manager
// (
// id INT,
// manager_name VARCHAR(100),
// dept_id INT
// )";


// Creating the Project table

$sql = "CREATE TABLE project
(
id INT,
project_name VARCHAR(100),
emp_id INT
)";
if($conn->query($sql)){
    echo "Table created sucessfully!";
}

$conn->close();