<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "challenge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Boodschappen (item, aantal, prijs)
VALUES ('Melk', '3', '2 Euro')";


if ($conn->query($sql) === TRUE) {
    echo "Boodschappen toegevoegd!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>