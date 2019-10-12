<?php
require_once('connect.php');

if (isset($_GET['id_brand'])){
  $id= $_GET['id_brand'];
  $exist= "SELECT count('id_brand') exist FROM `brand` WHERE `id_brand`=$id";
  $res= mysqli_query($link, $exist);
  $resultat= mysqli_fetch_array($res);
  /*var_dump ($resultat["exist"]);
  die("ok");*/
  if ($resultat["exist"]==1){

    $req="DELETE FROM `brand` WHERE `id_brand`= $id";
    $res=mysqli_query($link, $req);
      if ($res){
        echo 'Suppression effectuée';
      }
      else{
        echo 'Suppression ratée';
      }

        echo 'étudiant est non';
   }
else{
  echo 'erreur';
}
}

 ?>
