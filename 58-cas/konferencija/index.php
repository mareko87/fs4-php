<?php 

include 'konekcija.php';
$baza = "SELECT * FROM predavaci";
$upit = mysqli_query($konekcija, $baza);
$rezultat = mysqli_fetch_all($upit, MYSQLI_ASSOC);

include 'index.prikaz.php';