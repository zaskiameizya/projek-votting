<?php
$host = "localhost";
$user = "root";
$pass = "";
<<<<<<< HEAD
$db   = "rpl_vote";
=======
$db   = "projek-votting";
>>>>>>> 97994c7ec3cb447996c0d188d73deef214f9554f

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}