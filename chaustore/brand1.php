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

   <h1>Chaustore</h1>
   <?php
   require_once('brand.php');?>
   <table>
     <thead>
         <tr>
         <th>Brand</th>
         <th>Supprimer</th>
         <th>Modifier</th>
     </thead>
   <tbody>
     <?php while ($row= mysqli_fetch_array($req)) {
       ?>
     <tr>
       <td><?php echo $row['name']; ?></td>
       <td><a href="student_delete.php?id_student=<?php echo $row['id_student'];?>" target="_blank" title="Supprimer">Supprimer</a></td>
       </tr>
  </tbody>
   </table>
 </body>
</html>
