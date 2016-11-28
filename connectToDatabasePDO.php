
<?php
$servername = "ecbiz165.inmotionhosting.com";
$username = "jumpgo5_ajp";
$password = "jumpingFencesForThe$$_;___:";
$dbname = "jumpgo5_TestDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Calculations (expenses, hourlyRate, hours)
    VALUES ('6.78', '15.00', '7.5')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>