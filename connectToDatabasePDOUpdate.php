
<?php
// $servername = "ecbiz165.inmotionhosting.com";
$servername = "localhost";
$username = "jumpgo5_ajp";
$password = "HpaODP[c0XbW";
$dbname = "jumpgo5_TestDB";


$expenses = $_POST["expenses"];
$hourlyRate = $_POST["hourlyRate"];
$hours = $_POST["hours"];

$totalQuote = $hourlyRate * $hours + $expenses ;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
//THIS IS THE NEW UPDATE SQL I WANT AND NEED TO FINISH CRAFTING    
    // $sql = "UPDATE Calculations SET lastname='Doe' WHERE id=2";

    // // Prepare statement
    // $stmt = $conn->prepare($sql);

    // // execute the query
    // $stmt->execute();

    // // echo a message to say the UPDATE succeeded
    // echo $stmt->rowCount() . " records UPDATED successfully";
    
//THIS IS OLD INSERT SQL TO USE SAME FIELDS    
    // $sql = "INSERT INTO Calculations (expenses, hourlyRate, hours, totalQuote)
    // VALUES ($expenses, $hourlyRate, $hours, $totalQuote)";
    // // use exec() because no results are returned
    //$conn->exec($sql);
    //echo "New record created successfully<br>";
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>