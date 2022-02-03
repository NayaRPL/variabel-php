<?php
// data string
$nama_kelas = "informatika G";
$nama_depan ="nurul";
$nama_belakang="inayah";
//menggabungkan dua variabel dengan tanda petik ("")
$nama_lengkap="{$nama_depan} {$nama_belakang}";
//menggabungkan dua variabel dengan tanda titik(.)
$nama_lengkap = $nama_depan."".$nama_belakang;
$tgl_lahir="10/3/2002";
echo"nama kelas :{$nama_kelas} <br>";
echo"nama lengkap : {$nama_lengkap} <br> ";
echo'nama lengkap:'.$nama_lengkap.'<br>';
?>
 

