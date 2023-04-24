<?php
error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'ratownictwo');
$numer_z = $_POST["numer_z"];
$numer_d = $_POST["numer_d"];
$adres = $_POST["adres"];
$time = date('H:i:s');
echo $time;
mysqli_query($conn, "INSERT INTO `zgloszenia`(`ratownicy_id`, `dyspozytorzy_id`, `adres`, `pilne`, `czas_zgloszenia`) VALUES ('$numer_z','$numer_d','$adres','0','$time')");
mysqli_close($conn);
?>