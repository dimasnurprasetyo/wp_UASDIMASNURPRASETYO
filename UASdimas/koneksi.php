<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "unegodb";

$conn   = mysqli_connect($host, $user, $pass, $db);
$result = mysqli_query($conn, "SELECT * FROM barang");
