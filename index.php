<?php require ("connect.php");
$ambildata=mysqli_query($koneksi,"select * from barang");
if($_POST){
  $namaBarang = $_POST['namaBarang'];
  $jumlahBarang = $_POST['jumlahBarang'];
  $hargaBarang = $_POST['hargaBarang'];

  // var_dump($namaBarang, $jumlahBarang, $hargaBarang);

  // if($namaBarang != ""){
    // Alert untuk nunjukkan nama barang tidak ada
    // jumlahBarang != ""
    // hargaBarang != ""
    $sql = "INSERT INTO 'barang' ('id', namaBarang, jumlahBarang, hargaPerBarang) VALUES (0,'$namaBarang', $jumlahBarang, $hargaBarang)";
    $q = mysqli_query($koneksi,$sql);
    var_dump($q,$sql);
  // }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border=1>
    <tr>
    <th>ID</th>
    <th>Nama Barang</th>
    <th>Jumlah Barang</th>
    <th>Harga per Barang</th>
    <th>Actions</th>
    </tr>
<?php
while($tampil = mysqli_fetch_array($ambildata)){
  echo "
  <tr>
  <td>".$tampil['id']."</td>
  <td>".$tampil['namaBarang']."</td>
  <td>".$tampil['jumlahBarang']."</td>
  <td>".$tampil['hargaPerBarang']."</td>
  <td><a href='delete.php?id=".$tampil['id']."'>DELETE DATA |
  <a href='edit.php?id=".$tampil['id']."'>EDIT DATA</td>
  </tr>";
}
echo "</table>";
?>
  <button>Add Data</button>
  <!-- Modal untuk add data -->
  <form method="post" action="">
    <input type="text" name="namaBarang" placeholder="Nama Barang">
    <input type="number" name="jumlahBarang" placeholder="Jumlah Barang">
    <input type="number" name="hargaBarang" placeholder="Harga per Barang">
    <button type="submit">contoh btton</button>
  </form>
  </body>
</html>
