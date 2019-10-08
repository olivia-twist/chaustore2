<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="chaustore.css" rel="stylesheet" type="text/css">

    <title>Chaustore</title>
  </head>
  <body>

    <?php
    require_once('connect.php');
    //try{$dbh = new PDO('mysql -h 164.132.110.233;dbname=simplon_chaustore', 'simplon', 'xCIwyTKo3)?(31;*');}
    //catch (Exception $e){
    //die('erreur : ' . $e->getMessage());
     ?>

   <h1>Chaustore</h1>
    <form method="POST" action="">
      <label for="choice">Rechercher par:</label><br/>
      <select name="choice" id="choice">

    <?php  require_once('category.php');
    ?>

        <option value= "<?php echo $donnees['tables'];?>"></option>




      </select>
    </form>
  </body>
</html>
