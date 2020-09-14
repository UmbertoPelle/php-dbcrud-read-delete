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
  WHERE pagante_id = 6 && status LIKE 'rejected'
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  echo "pagante_id = 6 was deleted";
} elseif ($result) {
  echo "0 results";
}
else {
  echo "query error";
}
$conn->close();
