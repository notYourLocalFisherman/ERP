<?php
require_once("connect.php");
if($_GET['id']){
  $id = $_GET['id'];
  $sql = "DELETE FROM 'barang' WHERE id ='$id'";
  $q = mysqli_query($koneksi, $sql);
  var_dump($q);
}
 ?>
