<?php 
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
    die("Połączenie nieudane, error: " . $conn->connect_error);
}
echo "Połączenie udane";
?>
