<?php
    require_once("Connexion.php");

    function getNbSalaries(){
        global $conn ;
        $req = "SELECT count(*) as nb FROM salaries ;"; 
        $result = mysqli_query($conn,$req) or die (mysqli_error($conn));
        $ligne=mysqli_fetch_assoc($result);
        return $ligne['nb'];
    }

    function getAllSalaries(){
        global $conn;
        $listeSalaries = array(); 
        $req = 'SELECT * FROM salaries';
        $result = mysqli_query($conn,$req) or die (mysqli_error($conn));
        while($ligne = mysqli_fetch_assoc($result)) { 
        $listeSalaries[]=$ligne; 
        }
        return $listeSalaries;
    }
    
    function getSalaireAvg(){
        global $conn ;
        $req = "SELECT avg(salaire) as moyenne FROM salaries ;";
        $result = mysqli_query($conn,$req) or die (mysqli_error($conn));
        $ligne=mysqli_fetch_assoc($result);
        return $ligne['moyenne'];
    }

    function getSalaireMin(){
        global $conn ;
        $req = "SELECT min(salaire) as minimum FROM salaries ;";
        $result = mysqli_query($conn,$req) or die (mysqli_error($conn));
        $ligne=mysqli_fetch_assoc($result);
        return $ligne['minimum'];
    }

    function getSalaireMax(){
        global $conn ;
        $req = "SELECT max(salaire) as maximum FROM salaries ;";
        $result = mysqli_query($conn,$req) or die (mysqli_error($conn));
        $ligne=mysqli_fetch_assoc($result);
        return $ligne['maximum'];
    }

    function getNbSalariesService(){
        global $conn ;
        $req = "SELECT count(*) as nb FROM salaries ;";
        $result = mysqli_query($conn,$req) or die (mysqli_error($conn));
        $ligne=mysqli_fetch_assoc($result);
        return $ligne['nb'];
    }
?>