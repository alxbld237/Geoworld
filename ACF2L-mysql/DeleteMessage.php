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
    $requete = "DELETE FROM
    message where idMessage = $id";
    if ( !( $result = mysqli_query( $conn,$requete )))
    die( "Erreur de la requete :". $conn -> error );
    mysqli_close($conn);
    header('Location: ListeMessage.php'); 
?>