<?php
  require_once('header.html');

  $conn = mysqli_connect('localhost','root','sio','salaries'); 
  if ($conn->connect_error) { 
	die("Connection failed: " . $conn->connect_error); }
 
      
  $req1 = "SELECT * FROM salaries ;";
  $result1 = mysqli_query($conn,$req1) or die (mysqli_error($conn));
?>
<div class="container my-5">
<table class="table table-hover">
  <th>id</th><th>nom</th><th>prenom</th><th>date-naissance</th>
  <th>date-embauche</th><th>salaire</th><th>service</th>
<?php
  echo "<tr>";
  while ( $ligne=mysqli_fetch_array($result1)){
     echo "<tr>";
        echo "<td>".$ligne['idsalaries']."</td>";
        echo "<td>".$ligne['nom']."</td>";
        echo "<td>".$ligne['prenom']."</td>";
	      echo "<td>".$ligne['date_naissance']."</td>";
        echo "<td>".$ligne['date_embauche']."</td>";
        echo "<td>".$ligne['salaire']."</td>";
	      echo "<td>".$ligne['service']."</td>";
     echo "</tr>";
  }
?>
</table>
<?php
  $req2 = "SELECT count(*) as nb FROM salaries ;";
  $result2 = mysqli_query($conn,$req2) or die (mysqli_error($conn));
  $ligne=mysqli_fetch_assoc($result2);
  echo "<p>nombre de salariés : ".$ligne['nb']."</p>";

  $req3 = "SELECT avg(salaire) as moyenne FROM salaries ;";
  $result3 = mysqli_query($conn,$req3) or die (mysqli_error($conn));
  $ligne=mysqli_fetch_assoc($result3);
  echo "<p>salaire moyen : ".round($ligne['moyenne'])."</p>";

?>
</div>
<?php
  require_once('footer.html');
?>