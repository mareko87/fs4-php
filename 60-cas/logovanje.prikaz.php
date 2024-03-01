<?php include 'template_parts/header.php'; ?>

    <header>
        <img class="w-100" src="img/login.jpg" alt="">
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-8 p-5 bg-light border my-5 text-center mx-auto rounded-5">
                <form action="logovanje.php" method="post">
                    <input type="email" name="email" placeholder="Unesite email" class="form-control mb-3">
                    <input type="password" name="lozinka" placeholder="Unesite lozinku" class="form-control mb-3">
                    <button class="btn btn-success btn-lg" type="submit">Uloguj se</button>
                </form>
            </div>
        </div>
    </div>

<?php include 'template_parts/footer.php'; ?>