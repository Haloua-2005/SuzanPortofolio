<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUZAN DOGAN</title>


    <link rel="stylesheet" href="/assets/css/homepage.css">
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/css_js.php';
        get_css();
    ?>
</head>
<body>


        <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
        ?>



    <section id="homeAcceuil" class="section_homepage">
    <main id="main">
        <div class="conteneur">
            <h1 class="TITLE">SUZAN DOGAN</h1>
            <h2 class="TITLE">PORTOFOLIO</h2>
        </div>
    </main>
        <div class="conteneur">
            <div class="card">
                <h1 class="TITLE">Bienvenue dans mon monde</h1>
                <p class="TEXT">
                     Je m'appelle Suzan Dogan, une étudiante actuellement en BUT GEA,
                    qui partage entre les chiffres et la créativité et j'aimerai évolure dans le domaine du marketing de luxe.
                </p>
                <a href="propos.php" class="link">En savoir plus</a>
            </div>
        </div>
    </section>

        <section class="section_homepage" id="homeTravel">
            <div class="conteneur">
                <h1 class="TITLE">MES VOYAGES</h1>
<!--                <img src="/assets/images/IMG_8200%202.jpg" alt="image de voyage avec cadre blanc">-->
                <div class="img"></div>
                <div class="d-flex">
                    <a href="/sae.php" class="TITLE">SAE</a>
                    <a href="/stage.php" class="TITLE">Stage</a>
                    <a href="/contact.php" class="TITLE">Contact</a>
                </div>
            </div>
        </section>


<!--    --><?php
//        require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
//    ?>

    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/css_js.php';
        get_js();
        ?>
</body>
</html>