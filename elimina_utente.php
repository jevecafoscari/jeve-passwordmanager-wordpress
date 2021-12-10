<?php
$id=$_GET['id'];

$conn = new mysqli("localhost","jevemanagerpsw","GsSwS2zmbRQk", "my_jevemanagerpsw");
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

$query = "DELETE FROM utente WHERE id='".$id."' ";
if($conn->query($query)==TRUE){
    echo "TRUE";
}else{
    echo "Porco DIO".$conn->error;
}
$conn->close();                                          
header("Location:dashboard.php");                                      
?>