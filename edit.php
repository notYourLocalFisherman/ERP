<?php

$namaBarang = $_POST['namaBarang']
$sql = "UPDATE 'barang' SET 'namaBarang' = $namaBarang where id=$_GET['id']";
$q = mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" action="">
      <input type="text" name="namaBarang" placeholder="Nama Barang">
      <input type="number" name="jumlahBarang" placeholder="Jumlah Barang">
      <input type="number" name="hargaBarang" placeholder="Harga per Barang">
      <button type="submit">
    </form>
  </body>
</html>
