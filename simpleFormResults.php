<html>
<body>
<?php $totalQuote = $hourlyRate * $hours + $expenses;?>

Expenses: <?php echo $_POST["expenses"]; ?><br>
Hourly Rate: <?php echo $_POST["hourlyRate"]; ?><br>
Hours: <?php echo $_POST["hours"]; ?><br>

Total Cost is: <?php echo $totalQuote; ?>


</body>
</html>