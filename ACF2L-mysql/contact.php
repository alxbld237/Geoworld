<?php require_once('header.html');
	
	?>
	<div class="container">
		<br>
		<hr>
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
				$nom = $_GET['nom']; 
				$email = $_GET['email'];
				$date = $_GET['dateNaissance'];
				$demande = $_GET['demande'];
				$requete = "INSERT INTO message(nomPersonne,melPersonne,dateNaissance,objet)
				VALUES ('$nom','$email','$date','$demande');"; 
				if ( !( $result = mysqli_query( $conn,$requete )))
				die( "Erreur de la requete :". $conn -> error );

				mysqli_close($conn); 
				echo"<h2>Merci, Mr, Mme $nom pour votre prise de contact, nous vous repondrons
				prochainement </h2>"; 
        	?>		
		<hr>
	</div>
	</footer>
	<!-- Footer Section Ends -->
	
	<!-- Jquery Library File -->
	<script src="js/jquery-1.12.4.min.js"></script>
	<!-- Bootstrap js file -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Wow js file -->
	<script src="js/wow.js"></script>
	<!-- Swiper Carousel js file -->
	<script src="js/swiper.min.js"></script>
	<script src="js/SwiperAnimation.min.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Slick Nav js file -->
	<script src="js/jquery.slicknav.js"></script>
	<!-- SmoothScroll -->
	<script src="js/SmoothScroll.js"></script>
    <!-- Main Custom js file -->
	<script src="js/function.js"></script>
</body>
</html>