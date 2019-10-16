<form method="get">
  <label for="name">name</label>
  <input type="text" id="name" name="name" value="
    <?php if (!empty($_GET['name'])) {
      $id= $_GET['name'];
    //$sql = 'UPDATE `brand` SET `name`= $id WHERE id='id'';
    $req = mysqli_query($link, $sql);}
    ?>">
  </form>
