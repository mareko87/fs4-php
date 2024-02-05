<?php include 'header.php'; ?>

<!-- main header -->
<header class="mainHeader">
    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/header.jpg" alt="">
</header>

<!-- baner -->
<section class="container baner text-center text-white p-5 position-relative">
    <h1>Najbolja solucija za rast Vašeg biznisa</h1>
    <p class="lead">Kada želite promociju svog brenda i usluge onda je najsvrsishodnije rešenje da imate sve na jednom
        mestu: facebook i google, reklame, kopirajt, SEO...</p>
</section>

<!-- usluge -->
<section class="usluge container py-5">
    <h2 class="text-center">Usluge</h2>
    <article class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mint-socijalne-mreze.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Drustvene mreze</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Procitaj vise</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mint_seo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">SEO</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Procitaj vise</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mint-google-oglasi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Google oglasi</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Procitaj vise</a>
                </div>
            </div>
        </div>
    </article>
</section>

<?php include 'footer.php'; ?>