<?php
session_start();
?>

<?php include 'template_parts/header.php'; ?>

    <header>
        <img class="w-100" src="img/header.jpg" alt="">
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-8 p-5 bg-light border my-5 text-center mx-auto rounded-5">
                <?php 
                if(isset($_SESSION['id'])) {
                    echo '<h1>Dobrodosli na nasu edukativnu platformu</h1>';
                } else {
                    echo '<h1>Uloguj se ili registruj na nasu platformu</h1>';
                }
                ?>
            </div>
        </div>
    </div>

<?php include 'template_parts/footer.php'; ?>

    