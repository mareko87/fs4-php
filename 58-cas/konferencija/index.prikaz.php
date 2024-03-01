<form action="sacuvaj.php" method="post">
    <input type="text" name="ime" placeholder="Unesite ime">
    <input type="text" name="tema" placeholder="Koja je vasa tema">
    <button type="submit">Sacuvaj unos</button>
</form>

<?php foreach($rezultat as $red) : ?>
    <?php echo $red['ime']?> <a href="brisanje.php?id=<?php echo $red['id']; ?>">Brisanje</a> <a href="izmena.php?id=<?php echo $red['id']; ?>">Izmeni</a> <hr>
<?php endforeach; ?>

<?php mysqli_close($konekcija); ?>