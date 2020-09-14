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
  SELECT id, status, price
  FROM pagamenti
  WHERE price > 600.00
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
   //var_dump($row); die();
   ?><ul>
     <li><?php echo 'ID: ' .$row['id'] . '-> '.
      $row['status'] . ': ' . $row['price'] . '$';
    ?></li>
  </ul> <?php
  }

} elseif ($result) {
  echo "0 results";
}
else {
  echo "query error";
}
$conn->close();
