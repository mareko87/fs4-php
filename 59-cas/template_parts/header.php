<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online kurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="container-fluid text-center p-5 navigacija">
        <a href="index.php" class="logo"><h1 class="display-1">Online kurs</h1></a>
        <ul class="nav justify-content-center">
            <?php if(isset($_SESSION['id'])) : ?>
                <li><a href="izlogujse.php" class="nav-link">Izloguj se</a></li>
            <?php else : ?>
                <li><a href="logovanje.prikaz.php" class="nav-link">Uloguj se</a></li>
                <li><a href="registracija.prikaz.php" class="nav-link">Registruj se</a></li>
            <?php endif; ?>
        </ul>
    </div>