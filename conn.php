<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "gradebook";
$msg = "Unable to connect";
$conn = new mysqli($host,$user,$pass, $db) or die($msg);
?>