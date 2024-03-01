<?php 
include 'konekcija.php';

$id = $_GET['id'];
$baza = "SELECT * FROM predavaci WHERE id = $id";
$upit = mysqli_query($konekcija, $baza);
$rezultat = mysqli_fetch_assoc($upit);

include 'izmeni.prikaz.php';

