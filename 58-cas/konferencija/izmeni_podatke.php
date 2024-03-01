<?php 
include 'konekcija.php';

$id = $_POST['id'];
$ime = $_POST['ime'];
$tema = $_POST['tema'];

$baza = "UPDATE predavaci SET ime = '$ime', tema = '$tema' WHERE id = $id";
$upit = mysqli_query($konekcija, $baza);

header('Location: index.php');