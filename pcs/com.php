<?php
include "db.php";
$com=$_POST["text"];
$name=$_POST["hide"];
//SQL query

$in="INSERT INTO comment (username,comments) VALUES ('$name',  '$com')";
$conn->query($in);
