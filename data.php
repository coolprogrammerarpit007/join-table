<?php
    global $conn;

    // Insert data into tables

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "COMPANY";

    $conn = new mysqli($localhost,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection Failed!".$conn->connect_error);
    }

    // $emp_name = "IDRIS's";

    // $sql = "INSERT INTO employees(emp_name,salary,dept_id,manager_id) VALUES('".mysqli_real_escape_string($conn, $emp_name)."',10000,1,1),('Aweda''s', 20000, 2, 2),('Zubair''s', 3000, 3, 2),('Young''s', 4000, 3, 3),('Babu''s', 5000, 1, 3),('John''s', 1000, 8, 1)";


    // // insert into the departmant table
    // $sql = "INSERT INTO department(id,dept_name) VALUES (1,'Engineering'),(2,'Product'),(3,'Marketing'),(4,'Support')";

    // Inserting Data Into Manager

    // $sql = "INSERT INTO manager(id,manager_name,dept_id) VALUES(1,'Doe',1),(2, 'Jane', 2), (3, 'May', 4),(4,'Harry',3)";

    // query to insert data into the project table

    $sql = "INSERT INTO project(id,project_name,emp_id) VALUES(1,'FINTEC APP',1),(1, 'Fintech App', 5), (1, 'Fintech App', 6), (2, 'Cooking Website', 4), (2, 'Cooking Website', 3)";
    if($conn->query($sql)){
        echo "Data Sucessfully inserted into the table!";
    }
    else{
        echo "Unsucessful Query!";
    }