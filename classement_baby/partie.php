<?php
  //connection au serveur
  $bdd = new PDO('mysql:host=localhost;dbname=player;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_POST["winner"])){
  $winner = $_POST["winner"] ;
  $looser = $_POST["looser"] ;
  $winner_point = $_POST["winner_point"] ;
  $looser_point = $_POST["looser_point"] ;
  $statement = $bdd->prepare("
      INSERT INTO player (winner, looser,winner_point,looser_point)
      VALUES
          ('$winner','$looser','$winner_point','$looser_point')
      ;
  ");

  $statement->execute();

        }
?>

<html>
  <head>
    <title>partie</title>
  </head>
<body>
<form name="insertion" action="partie.php" method="POST">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>pseudo</td>
      <td><input type="text" name="winner" /></td>
    </tr>
    <tr align="center">
      <td>team</td>
      <td><input type="text" name="looser" /></td>
    </tr>
    <tr align="center">
      <td>pseudo</td>
      <td><input type="text" name="winner_point" /></td>
    </tr>
    <tr align="center">
      <td>team</td>
      <td><input type="text" name="looser_point" /></td>
    </tr>
    <tr align="center">
      <td colspan="2"><input type="submit" value="insérer"></td>
    </tr>
  </table>
</form>
<form name="insertion" action="partie.php" method="POST">
    <tr align="center">
      <td colspan="2"><input type="submit" value="insérer"></td>
    </tr>
</form>
</body>
</html>
