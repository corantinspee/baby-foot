<?php
  //connection au serveur
  $bdd = new PDO('mysql:host=localhost;dbname=player;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

var_dump($_POST);
if (isset($_POST["pseudo"])){
  $pseudo = $_POST["pseudo"] ;
  //prenom:
  $team = $_POST["team"] ;
  $statement = $bdd->prepare("
      INSERT INTO player (pseudo, team)
      VALUES
          ('$pseudo','$team')
      ;
  ");

  //$statement->bindValue('$pseudo','$team', $_GET['name']['pseudo']);
  $statement->execute();

        }
?>

<html>
  <head>
    <title>player</title>
  </head>
<body>
<form name="insertion" action="player.php" method="POST">
  <table border="0" align="center" cellspacing="3" cellpadding="3">
    <tr align="center">
      <td>pseudo</td>
      <td><input type="text" name="pseudo" /></td>
    </tr>
    <tr align="center">
      <td>team</td>
      <td><input type="text" name="team" /></td>
    </tr>
    </tr>
    <tr align="center">
      <td colspan="2"><input type="submit" value="insérer"></td>
    </tr>
    
  </table>
</form>
<form name="insertion" action="partie.php" method="POST">
    <tr align="center">
      <td colspan="2"><input type="submit" value="debuter la partie"></td>
    </tr>
</form>
</body>
</html>
