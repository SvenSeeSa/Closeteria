<?php

$productCode = $_GET["productCode"];
$connection = mysqli_connect("localhost", "root", "", "classicmodels");

$sql = "SELECT * FROM products WHERE productCode='$productCode'";
$result = mysqli_query($connection, $sql);

echo json_encode(mysqli_fetch_object($result));