<?php
//http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers

$servername = "mysql.hostinger.in";
$username = "u906437194_sat";
$password = "testsathish";
$dbname = "u906437194_sat";
try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    $value = "<table>";

         foreach($conn->query('SELECT * FROM info') as $row) {
   		$value = $value."<tr><td>".$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['age'].'</td><td>'.$row['email']."</td></tr>"; 
	}
   $value = $value."</table>";
    print $value;

}

catch(PDOException $e) {

    echo "Error: " . $e->getMessage();

}

$conn = null;

?> 