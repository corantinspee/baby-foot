<?php
  //connection au serveur
  $bdd = new PDO('mysql:host=localhost;dbname=player;charset=utf8', 'root', '');


  //récupération des valeurs des champs:
  //nom:
  $pseudo     = $_POST["pseudo"] ;
  //prenom:
  $team = $_POST["team"] ;


  //création de la requête SQL:
  $sql = "INSERT  INTO personnes (nom, prenom, adresse, cp, telephone)
            VALUES ( '$nom', '$prenom', '$adresse', '$cp', '$tel') " ;

  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;

  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>
