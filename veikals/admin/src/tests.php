<?php
require_once 'Database.php';

$db = new Database();
$db->connect();

$result = $db->query("SELECT * FROM mytable");
while ($row = $result->fetch_assoc()) {
  echo $row['column_name'] . "<br>";
}

$db->disconnect();
