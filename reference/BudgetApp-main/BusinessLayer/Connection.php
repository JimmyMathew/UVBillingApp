<?php
$createdBy = "jimmy";
$updatedBy = "jimmy";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "budgetdb";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db)or die("Connect failed: %s\n". $conn -> error);