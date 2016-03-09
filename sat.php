<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

$servername = "185.28.20.62";
$username = "u906437194_sat";
$password = "testsathish";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";




echo "Hello World! sathish";
?>

</body>
</html> 