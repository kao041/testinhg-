<?php
// Connection

$servername = "studentdb-maria.gl.umbc.edu";
$username = "koshun1";
$password = "koshun1";
$dbname = "koshun1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>