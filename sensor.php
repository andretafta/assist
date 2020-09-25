<?php
include "config.php";

$sql = mysqli_query($link, "SELECT *FROM sensor");
$data = mysqli_fetch_array($sql);
$nilai = $data["rate_heart"];

echo $nilai;

?>