<?php 
include 'config.php';
?>
 
<form action="searchdb.php" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
 
<?php 
    if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
    }
?>
<?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($link,"select * from karyawan where id like '%".$cari."%' or name like '%".$cari."%' ");    
 }else{
  $data = null;
 }
 ?>


 <?php

 if($data!= null){

 ?>
<table border="1">
 <tr>
  <th>No</th>
  <th>ID</th>
  <th>Nama</th>
  <th>Jabatan</th>
  <th>Nomor Polisi</th>
 </tr>
<?php 
 $no = 1;
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
  <td><?php echo $no++; ?></td>
  <td><?php echo $d['id']; ?></td>
  <td><?php echo $d['name']; ?></td>
  <td><?php echo $d['position']; ?></td>
  <td><?php echo $d['nopol']; ?></td>
 </tr>
 <?php } ?>
</table>

 <?php } else {}?>



