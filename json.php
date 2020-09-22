<?php
include 'config.php';

$id =  trim($_GET["id"]);

$sql = "SELECT * FROM karyawan WHERE id = '$id'";

    if($result = mysqli_query($link, $sql)){
        

        if(mysqli_num_rows($result) > 0){
            $response = array();
            $response["karyawan"] = array();
            while($row = mysqli_fetch_array($result)){
                $h['id'] = $row["id"];
                $h['name'] = $row["name"];
                $h['position'] = $row["position"];
                $h['nopol'] = $row["nopol"];
                array_push($response["karyawan"], $h);
            }
            echo json_encode($response);
        }else {
            $response["message"]="tidak ada data";
            echo json_encode($response);
         mysqli_error($link);

    // Close connection
    mysqli_close($link);
    }
}
?>