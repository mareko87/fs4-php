<form action="izmeni_podatke.php" method="post">
    <input type="hidden" name="id" value="<?php echo $rezultat['id']; ?>">
    <input type="text" name="ime" value="<?php echo $rezultat['ime']; ?>">
    <input type="text" name="tema" value="<?php echo $rezultat['tema']; ?>">
    <button type="submit">Izmeni</button>
</form>