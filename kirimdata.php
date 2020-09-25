<?php
$sql = mysqli_connect("localhost", "root", "", "data-karyawan");

//baca data yang dikrim

$nilai = $_GET["jarak"];

//update data di database (tabel sensor)
mysqli_query($sql, "update sensor set rate_heart='$nilai'");

?>