<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "bca-minor-project";

  $conn = new mysqli($host, $username, $password, $database);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>