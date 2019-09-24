<?php
include 'db_connnection.php';

// Create connection
$conn = new mysqli("localhost", "root", "", "challenge");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Boodschappen (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
item VARCHAR(30) NOT NULL,
aantal VARCHAR(30) NOT NULL,
prijs VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Boodschappenlijst aangemaakt";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>