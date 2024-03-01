<?php 
session_start();
include 'konekcija.php';

$email = $_POST['email'];
$lozinka = $_POST['lozinka'];

$upit = "SELECT * FROM polaznici WHERE email = '$email' AND lozinka = '$lozinka'";

$baza = mysqli_query($konekcija, $upit);

$id = mysqli_fetch_assoc($baza)['id'];

if($id) {
    $_SESSION['id'] = $id;
    header('Location: index.php');
} else {
    header('Location: logovanje.prikaz.php');
}