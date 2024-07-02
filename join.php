<?php

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "COMPANY";

$conn = new mysqli($localhost,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed!".$conn->connect_error);
}



// query to find each employees name and dapartment

// $sql = "SELECT e.emp_name,d.dept_name
//         FROM employees e
//         JOIN department d
//         ON (e.dept_id = d.id)

// ";

// query to find each employees from the table whether department exist or not

// $sql = "SELECT e.emp_name,d.dept_name
//         FROM employees e
//         LEFT JOIN department d
//         ON (e.dept_id = d.id)
// ";
// $sql = "SELECT e.emp_name,d.dept_name
//         FROM employees e
//         RIGHT JOIN department d
//         ON (e.dept_id = d.id)
// ";

// $sql = "
//         SELECT e.emp_name,d.dept_name,m.manager_name,p.project_name
//         FROM employees e
//         LEFT JOIN department d
//         ON(e.dept_id = d.id)
//         LEFT JOIN manager m
//         ON(e.manager_id = m.id)
//         LEFT JOIN project p
//         ON(e.id = p.emp_id)

// ";

$sql = "SELECT e.emp_name, d.dept_name
FROM employees e
CROSS JOIN department d";

$result = $conn->query($sql);

if($result->num_rows>0){
    $row = $result->fetch_all();
    var_dump($row);
}

$conn->close();
 