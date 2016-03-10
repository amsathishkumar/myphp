<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

$servername = "mysql.hostinger.in";
$username = "u906437194_sat";
$password = "testsathish";

try {
    	$conn = new PDO("mysql:host=$servername;dbname=u906437194_sat", $username, $password);
    	// set the PDO error mode to exception
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO info (id, name, age, email) VALUES ('1', 'sathish','37', 'sat@example.com')";

        $res=$conn->query($sql);

	if ($res) {
    		echo "New record created successfully";
	} else {
    		echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
	}

	
    }
    catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage() . "<br>";
    }




?>

</body>
</html> 