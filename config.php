<?php
$host = "localhost";
$user = "root";
$pass = "";
<<<<<<< HEAD
$db   = "rpl_vote";

=======
>>>>>>> 7eb616969bfe6b659c563c4ba2c86f0986aaee50
$db   = "rpl-vote";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}