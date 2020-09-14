<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbhotel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn && $conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
  return;
}


$sql = "
  DELETE FROM pagamenti
  WHERE pagante_id = 8'
";

$result = $conn->query($sql);

if( $result === TRUE ) {
  echo 'deleted.';
  print_r($result);
} else {
  echo 'Error with deletion';
  print_r($result); 
}
$conn->close();
