<?php

class Database {
  private $host;
  private $username;
  private $password;
  private $database;
  private $connection;

  public function __construct() {
    $this->loadConfig();
  }

  private function loadConfig() {
    $config = parse_ini_file(__DIR__ . '../../../admin/config/config.php', true);
    $this->host = $config['database']['db_Host'];
    $this->username = $config['database']['db_user'];
    $this->password = $config['database']['db_password'];
    $this->database = $config['database']['db_name'];
  }

  public function connect() {
    ini_set('default_socket_timeout', 60); 
    $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
    if ($this->connection->connect_error) {
        die("Connection failed: " . $this->connection->connect_error);
    }
  }

  public function disconnect() {
    $this->connection->close();
  }

  public function query($query) {
    $result = $this->connection->query($query);
    return $result;
  }
}
