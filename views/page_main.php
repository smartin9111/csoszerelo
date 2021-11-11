<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Csoszerelo Kft</title>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT ?>css/main_style.css">
    <?php if ($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="' . $viewData['style'] . '">'; ?>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <header>
            <div id="user"><em><?= $_SESSION['userlastname'] . " " . $_SESSION['userfirstname'] ?></em></div>
            <h1 class="header">Gyors szolgáltatás az ország bármely részén</h1>
        </header>
        <nav>
            <nav class="navbar navbar-dark bg-dark">


                <?php echo Menu::getMenu($viewData['selectedItems']); ?>
            </nav>
        </nav>

        <aside>
            <p>Vízszerelés gyorsszolgálat
                Cégünk szakértő megoldást nyújt vízzel kapcsolatos problémáira, legyen szó csőtörésről,
                duguláselhárításról,
                egy mosógép vagy mosogatógép hálózatra kötéséről, fűtésrendszerek tisztításáról és
                karbantartásáról vagy
                csőrendszerek teljes felújításáról.

                Munkánkat lelkiismeretesen végezzük, tudjuk, hogy néha egy-egy percen múlik az, hogy a csőtörés
                egy egész
                társasházat fenyegessen. Hívjon minket bátran a nap 24 órájában hétvégén és ünnepnapokon is, mi
                a lehető
                leggyorsabban indulunk a helyszínre!

                Kollégáink Budapest belvárosából indulnak, de egész Pest megye területén végezzük tevékenységünk
                minden
                részét. Amennyiben kérdése van, bátran hívjon minket telefonszámunkon vagy küldjön nekünk
                emailt!
            </p>
        </aside>


        <section>
            <?php if ($viewData['render']) include($viewData['render']); ?>
        </section>

    </div>
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