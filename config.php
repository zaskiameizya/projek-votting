<?php
$host = "localhost";
$user = "root";
$pass = "";
<<<<<<< HEAD
$db   = "rpl_vote";
=======
$db   = "rpl-vote";
>>>>>>> 015ab4555ad2432ca867161bc6a23ae6369c9ddd

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}