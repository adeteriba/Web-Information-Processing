<?php
$servername = "localhost";
$username = "root";
$password = "test1234";
$dbname = "assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE eBook_MetaData (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Creator VARCHAR(50) NOT NULL,
Title VARCHAR(50) NOT NULL,
Type VARCHAR(50) NOT NULL,
Identifier VARCHAR(50) NOT NULL,
Date TIMESTAMP,
Language VARCHAR(100) NOT NULL,
Description TEXT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table eBook_MetaData created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>