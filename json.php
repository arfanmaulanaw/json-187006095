<?php
include "config.php";
$hasil     = mysqli_query($koneksi,"select * from matakuliah");
$json_respon     = array();

if(mysqli_num_rows($hasil)>0){
    while($row=mysqli_fetch_array($hasil)){
        $json_respon[]=$row;
    }
    echo json_encode(array('Matakuliah'=>$json_respon));
}
?>