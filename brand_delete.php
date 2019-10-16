<?php
require_once('connect.php');

if (!empty($_GET['id_brand'])){
  $id= $_GET['id_brand'];
  $exist= "SELECT ('id_brand') FROM `brand` WHERE `id`=$id";
  $res= mysqli_query($link, $exist);
  //$resultat= mysqli_fetch_assoc($res);
  /*var_dump ($resultat["exist"]);
  die("ok");*/
  //if ($resultat["exist"]==1){
    $req="DELETE FROM `brand` WHERE `id`= $id";
    $res=mysqli_query($link, $req);
      if ($res){
        echo 'Suppression Brand effectuée';
      }
      else{
        echo 'Suppression Brand ratée';
      }
//  }
  //else{
  //  echo 'erreur';
  //}
}

 ?>
