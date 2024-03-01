<?php 
include 'konekcija.php';

$ime = $_POST['ime'];
$tema = $_POST['tema'];

$baza = "INSERT INTO predavaci VALUES (NULL, '$ime', '$tema')";

$upit = mysqli_query($konekcija, $baza);

if($upit) {
    header('Location: index.php');
}
