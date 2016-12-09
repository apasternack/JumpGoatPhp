
<?php
// $servername = "ecbiz165.inmotionhosting.com";
$servername = "localhost";
$username = "jumpgo5_ajp";
$password = "HpaODP[c0XbW";
$dbname = "jumpgo5_TestDB";

// $expenses = '8.78';
// $hourlyRate = '25.00';
// $hours = '3';


$expenses = $_POST["expenses"];
$hourlyRate = $_POST["hourlyRate"];
$hours = $_POST["hours"];





$totalQuote = $hourlyRate * $hours + $expenses ;





try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Calculations (expenses, hourlyRate, hours, totalQuote)
    VALUES ($expenses, $hourlyRate, $hours, $totalQuote)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>