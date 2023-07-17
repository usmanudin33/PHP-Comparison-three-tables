<?php
$servername = "sql104.infinityfree.com";
$username = "if0_34581132";
$password = "IodXNsa2N7q3";
$dbname = "if0_34581132_njugjug";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$node1 = "SELECT * FROM node1";
$res_node1 = $conn->query($node1);
$node2 = "SELECT * FROM node2";
$res_node2 = $conn->query($node2);
$node3 = "SELECT * FROM node3";
$res_node3 = $conn->query($node3);
?>