<?php
$conn = mysqli_connect('localhost','admin','sio','acf2l');
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); }
global $conn ; 
?>