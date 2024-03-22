<?php
$server = "localhost";
$user = "admin";
$password = "sio";
$dbname = "acf2l";
// Create connection
$conn = new mysqli($server, $user, $password, $dbname);
// Check connection
if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['id'];
$nom = $_GET['nom'];
$email = $_GET['email'];
$date = $_GET['dateNaissance'];
$demande = $_GET['demande'];
$requete = "UPDATE message set nomPersonne='$nom', melPersonne='$email',
dateNaissance='$date', objet='$demande' where idMessage = $id";
if ( !( $result = mysqli_query( $conn,$requete )))
die( "Erreur de la requete :". $conn -> error );
mysqli_close($conn);
header('Location: ListeMessage.php');
?>