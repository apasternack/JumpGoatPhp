<?php
$servername = "ecbiz165.inmotionhosting.com";
$username = "jumpgo5_ajp";
$password = "jumpingFencesForThe$$_;___:";
$dbname = "jumpgo5_TestDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Calculations (expenses, hourlyRate, hours)
VALUES ('16.78', '25.00', '37.5')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>