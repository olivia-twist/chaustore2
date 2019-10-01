<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="chaustore.css" rel="stylesheet" type="text/css">

    <title>Chaustore</title>
  </head>
  <body>

    <?php
    $link = mysqli_connect("164.132.110.233","simplon","xCIwyTKo3)?(31;*", "simplon_chaustore");

    if (!$link) {
      echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
      echo "Errno de débogage: " . mysqli_connect_erno() . PHP_EOL;
      echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
      exit;
    }
echo "Succès : Une connexion correcte à MySQL a été faite";
mysqli_close($link);

    //try{$dbh = new PDO('mysql -h 164.132.110.233;dbname=simplon_chaustore', 'simplon', 'xCIwyTKo3)?(31;*');}
    //catch (Exception $e){
    //die('erreur : ' . $e->getMessage());

    if (isset($_POST['category']) && empty($_POST['brand']) && empty($_POST['color']) && empty($_POST['size'])){
      $category = db_quote($_POST['category']);
      $brand = db_quote($_POST['brand']);
      $color = db_quote($_POST['color']);
      $size = db_quote($_POST['size']);

      if($category != "" && $brand == "" && $color == "" && $size == ""){
        $requete = "SELECT `category` FROM `simplon_chaustore`";
        $exec_requete = mysqli_query($conn, $requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['COUNT(id)'];
        if($count != 0) {
          echo 'Connexion réussie';
        }
        }
      }

     ?>

   <h1>Chaustore</h1>
   <form method="post" action="">
     <p>Catégories: <input type="text" name="category" id="category"/></p><input type="submit" value="Chercher"/>
     <p>Marques:<input type="text" name="brand" id="brand"/></p><input type="submit" value="Chercher"/>
     <p>Couleurs:<input type="text" name="color" id="color"/></p><input type="submit" value="Chercher"/>
     <p>Tailles:<input type="text" name="size" id="size"/></p><input type="submit" value="Chercher"/>


  </form>
  </body>
</html>
