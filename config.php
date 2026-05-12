<?php
$host = "localhost";
$user = "root";
$pass = "";
<<<<<<< HEAD
$db   = "rpl_vote";
=======
$db   = "rpl-vote";
>>>>>>> 9c7b80441d03fc7f34692be9c3cec608a25f641c

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}