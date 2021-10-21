<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MVC - PHP</title>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT ?>css/main_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <?php if ($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="' . $viewData['style'] . '">'; ?>
</head>

<body>
    <header>
        <div id="user"><em><?= $_SESSION['userlastname'] . " " . $_SESSION['userfirstname'] ?></em></div>
        <h1 class="header">Azonnnal szerelés bármikor</h1>
    </header>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src='/web2/css/logo.png' alt='' style='width:100px' />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <?php foreach ($this->data['menuItems'] as $item) : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <?php echo $item[0] ?>
                        </a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </nav>









    <aside>
        <p>Phasellus wisi nulla...</p>
    </aside>
    <section>
        <?php if ($viewData['render']) include($viewData['render']); ?>
    </section>
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Keressen minket bizalommal az alábbi elérhetőségeken ha vízvezetékszerelőre van szüksége!<br>
                    Telefon: 06-90-3333-567<br>
                    E-mail: vizszerelo@gmail.com<br>
                    Cím: 6230 Soltvadkert Szőlő u. 123<br>
                </p>
            </section>
            <!-- Section: Text -->

        </div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>