<?php
session_start();
    
        $conn = new mysqli("localhost","****","****", "****");
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
        }
        $query = "SELECT * FROM utente WHERE username LIKE '$username' AND password LIKE '$password'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $pass=$row['password'];
        $user=$row['username'];
        $Admin=$row['accessi'];
        $conn->close();

    if ($username == $user && $password == $pass)
    {
        $_SESSION["username"]=$user;
        $_SESSION["password"]=$pass;
        $_SESSION['accessi']=$Admin;
        Header("Location: dashboard.php");
        exit;
    }
    else
    {
    	
        header('Location:index.php');
        exit;
    }
?>
