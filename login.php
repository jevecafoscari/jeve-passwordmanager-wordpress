<?php
session_start();

$conn = new mysqli("localhost", "jevemanagerpsw", "GsSwS2zmbRQk", "my_jevemanagerpsw");
$username = $_POST["username"];
$password = $_POST["password"];

$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$query = "SELECT * FROM utente WHERE username LIKE '$username' AND password LIKE '$password'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$pass = $row['password'];
$user = $row['username'];
$Admin = $row['accessi'];
$conn->close();

if ($username == $user && $password == $pass) {
    $_SESSION["username"] = $user;
    $_SESSION["password"] = $pass;
    $_SESSION['accessi'] = $Admin;
    Header("Location: dashboard.php");
    exit;
} else {
    header('Location:index.php');
    exit;
}
?>