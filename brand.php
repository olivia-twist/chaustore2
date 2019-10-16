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
    ?>

   <h1>Brand</h1>
   <table>
     <thead>
         <tr>
         <th>Brand</th>
         <th>Modifier</th>
         <th>Supprimer</th>
     </thead>
   <tbody>
     <?php require_once('brand_afficher.php');?>

     <?php while ($row= mysqli_fetch_array($req)) {
       ?>
     <tr>
       <td><?php echo $row['name']; ?></td>
       <td><a href="brand_update.php?update_brand=<?php echo $row['update_brand'];?>" target="_blank" title="modifier">Modifier</a></td>
       <td><a href="brand_delete.php?id_brand=<?php echo $row['id_brand'];?>" target="_blank" title="Supprimer">Supprimer</a></td>
       <?php } ?>
       </tr>
  </tbody>
   </table>

   <?php require_once('brand_insert.php') ?>
   <form method= "POST">
     <label for="ajouter">Ajouter</label>
     <input type="text" id="ajouter" name="ajouter">
     <input type="submit" name="valider" value="Valider l'ajout">
   </form>
      <a href="index.html" title="bouton retour">Retour</a>
  </body>
  </html>
