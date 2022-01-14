<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "pdwel_ifa";

$id = $_POST['id'];

try {
  $conn = new PDO("mysql:host=$servername; port=3307; dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
  $sql = "DELETE FROM Disco WHERE id= $id";
  echo "comando foi direcionado para o BD:= $sql";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<br>Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>