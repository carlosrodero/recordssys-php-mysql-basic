<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_recordsys";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
  die("Connection error");
}