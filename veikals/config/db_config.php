<?php
require_once 'config.php';
$configReader = new ConfigReader('C:\xampp\htdocs\prakse\veikals\config\config.ini');
$db_Host = $configReader->getValue('database', 'db_Host');

print_r($db_Host);
?>