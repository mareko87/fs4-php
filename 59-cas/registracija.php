<?php 

include 'konekcija.php';

$ime = $_POST['ime'];
$email = $_POST['email'];
$lozinka = $_POST['lozinka'];

$upit = "INSERT INTO polaznici VALUES (NULL, '$ime', '$email', '$lozinka')";

$baza = mysqli_query($konekcija, $upit);

header('Location: logovanje.prikaz.php');