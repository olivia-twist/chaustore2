<?php
if(isset($_POST['ajouter'])){
$ajouter=$_POST['ajouter'];
$sql = 'INSERT INTO `color`(`name`) VALUES ("'.$ajouter.'")';
$req = mysqli_query($link, $sql);
}
 ?>
