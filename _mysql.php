<?php
$mysqli = new mysqli("localhost","srvworkoholix","HUHGbcqq.48+zujjntbbrtG","ipmb_cz");
// $mysqli = new mysqli("localhost","root","","ipmb.cz");

$mysqli->set_charset("utf8mb4");
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>