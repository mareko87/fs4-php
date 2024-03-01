<?php include 'template_parts/header.php'; ?>

    <header>
        <img class="w-100" src="img/register.jpg" alt="">
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-8 p-5 bg-light border my-5 text-center mx-auto rounded-5">
                <form action="registracija.php" method="post">
                    <input type="text" name="ime" placeholder="Unesite ime i prezime" class="form-control mb-3">
                    <input type="email" name="email" placeholder="Unesite email" class="form-control mb-3">
                    <input type="password" name="lozinka" placeholder="Unesite lozinku" class="form-control mb-3">
                    <button class="btn btn-danger btn-lg" type="submit">Registruj se</button>
                </form>
            </div>
        </div>
    </div>

<?php include 'template_parts/footer.php'; ?>