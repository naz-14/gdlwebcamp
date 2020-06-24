<?php
$user = '3486092_webcamp';
$password = '[kOQE?ee7m%Qzu.x';
$db = '3486092_webcamp';
$host = 'fdb22.awardspace.net';
$port = '3306';
// Create connection
$conn = new mysqli($host, $user, $password, $db);
// Check connection
if (mysqli_connect_errno()) {
  die("Connection failed: " .  mysqli_connect_error());
}
