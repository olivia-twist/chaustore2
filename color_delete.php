<?php
require_once('connect.php');

//if (!empty($_GET['id'])){
  //$id= $_GET['id'];
  //$exist= "SELECT count('id') exist FROM `brand` WHERE `id`=$id";
  //$res= mysqli_query($link, $exist);
//  $resultat= mysqli_fetch_assoc($res);
  /*var_dump ($resultat["exist"]);
  die("ok");*/
  //if ($resultat["exist"]==1){

    $req="DELETE FROM `color` WHERE `id`= 2";
    $res=mysqli_query($link, $req);
      //if ($res){
      //  echo 'Suppression effectuée';
    //  }
      //else{
        //echo 'Suppression ratée';
    //  }

        //echo 'étudiant est non';
  // }
//else{
//  echo 'erreur';
//}
//}

 ?>
