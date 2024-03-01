<?php 
include 'konekcija.php';

$id = $_GET['id'];
$baza = "DELETE FROM predavaci WHERE id = $id";
$upit = mysqli_query($konekcija, $baza);
header('Location: index.php');