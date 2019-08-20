<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE Members (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
address VARCHAR(100) NOT NULL,
gender VARCHAR(5) NOT NULL,
department VARCHAR(10) NOT NULL,
email VARCHAR(50),
contact VARCHAR(13)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Members created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>