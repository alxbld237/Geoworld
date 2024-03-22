<?php
    if ( isset($_GET['id']) and !empty($_GET['id'])){
        $id = $_GET['id'];
} 
else {
    header('Location: listeMessages.php');
}

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
$requete = "SELECT * FROM message where idMessage = $id";
if ( !( $result = mysqli_query( $conn,$requete )))
    die( "Erreur de la requete :". $conn -> error );
$row = mysqli_fetch_assoc($result); 
//print_r($row);

mysqli_close($conn);
?>

<!-- Contact Form start -->
<div class="contact-form">
    <form id="contactForm" action="updateMessage.php" method="get">
        <input name="id" type="hidden" value="<?php echo $row['idMessage']; ?>" />

        <div class="row">
            <div class="form-group col-md-6 col-sm-6">
                <input type="text" class="form-control" value="<?php echo $row
['nomPersonne']; ?>" name="nom" required />
                </div>

                <div class="form-group col-md-6 col-sm-6">
                    <input type="email" class="form-control" value="<?php echo $row
['melPersonne']; ?>" name="email"/>
                </div>

                <div class="form-group col-md-12 col-sm-12">
                    <label>Date de naissance : </label>
                    <input type="date" class="form-control" value="<?php echo $row
['dateNaissance']; ?>" name="dateNaissance">
                </div>
                    <div class="form-group col-md-12 col-sm-12">
                        Votre demande :
                        <select class="form-control" name="demande" required >
                            <option value="" disabled selected>Selectionner une option</option>
                            <option value="prix">prix</option>
                            <option value="sécurité">sécurité</option>
                            <option value="assurances">assurances</option>
                            <option value="horaires">horaires</option>
                            <option value="autres">Autres</option>

                        </select>
                    </div>
                    
                    <div class="col-md-12 col-sm-12 text-center">
                        <button type="submit" class="btn-contact">Submit</button>
                    </div>
             </div>
      </form>
   </div>
<!-- Contact Form end -->