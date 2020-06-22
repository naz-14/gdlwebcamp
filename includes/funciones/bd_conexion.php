<?php
$user = 'root';
$password = 'root';
$db = 'gdlwebcamp';
$host = 'localhost';
$port = 8889;
// Create connection 
$conn = new mysqli($host, $user, $password, $db, $port);
// Check connection 
if (mysqli_connect_errno()) {
  die("Connection failed: " .  mysqli_connect_error());
}
