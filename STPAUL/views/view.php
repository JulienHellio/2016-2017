<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <link href="css/styly.css" rel="stylesheet" />
    <title>SAINT PAUL DU TERRAY</title>
</head>

<body class="body">

<main class="main">

    <header-null class="header-null">
        <header class="header">
            <h1>SAINT PAUL DU TERRAY</a></h1>
            <menu-null class="menu-null">
                <div class="menu">
                    <a href="#" class="menu_link">Index</a>
                    <a href="#" class="menu_link">Manifestation</a>
                    <a href="#" class="menu_link">Facturation</a>
                    <a href="#" class="menu_link">Contact</a>
                </div>
            </menu-null>
        </header>
    </header-null>

    <noscreen/>

    <left class="left">
        <h2>Madame, Monsieur,</h2>
        <p>
            Votre enfant va partir durant l'ann&eacute;e scolaire en classe de d&eacute;couverte.
            <br />Une participation financi&egrave;re par enfant va prochainement vous &ecirc;tre demand&eacute;e.
            <br /><br />Cette ann&eacute;e le conseil municipal a d&eacute;cid&eacute; d'instaurer trois types de r&eacute;ductions
            et un plafonnement &agrave; 100 Euros par enfant.
        </p>
        <br />
        <ul>
            <li>R&eacute;duction de 10% si le Quotient Familial est inf&eacute;rieur &agrave; 500 &euro;</li>
            <li>R&eacute;duction de 20% pour famille de 2 enfants</li>
            <li>R&eacute;duction de 40% pour famille de 3 enfants ou plus</li>
        </ul>
    </left>

    <noscreen/>

    <right class="right">
        <h2>Liste des s&eacute;jours pr&eacute;vus </h2>
        <fieldset>
            <sejour>
                <?php foreach ($sejours as $sejour): ?>
                    <sejour>
                        <h2><p><?php echo $sejour['SEJINTITULE'] ?></p></h2>
                        <?php echo $sejour['SEJMONTANTMBI'].' &euro;' ?><br>
                        <?php echo 'A partir du '.$sejour['SEJDTEDEB'] ?>
                        <?php echo $sejour['SEJDUREE'].' nuits' ?>
                    </sejour>
                <?php endforeach ?>
            </sejour>
        </fieldset>
    </right>
</main>

<footer class="footer">
    Copyright &copy; 2017 Saint paul du terray
</footer>


</body>

</html>