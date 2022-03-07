<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="style/css/normalize.css">
    <link rel="stylesheet" href="style/css/loader.css">
    <link rel="stylesheet" href="style/css/main.css">
    <link rel="stylesheet" href="style/css/responsive.css">

    <title>La Palette du gout</title>
</head>
<body>

    <?php include('components/header.php'); ?>

    <main>
        <div class="imageResto">
            <img class="imgHead" src="style/img/jay-wennington-N_Y88TWmGwA-unsplash.jpg" alt="image restaurant la palette du gout">
        </div>
        <section class="sectionMenu1">
            <h1>La Palette du gout</h1>

            <p class="subTtitle">ENTRÉES</p>
            <div class="horizontalGreen"></div>
            <div class="cardMenuList flexbox">

                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Fricassée d'escargot</h3>
                        <p>Au piment d'Espelette</p>
                    </div>
                    <h3 class="prix">25€</h3>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Foie gras de canard mi-cuit</h3>
                        <p>Et ses copeaux de truffe noire</p>
                    </div>
                    <h3 class="prix">35€</h3>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Oeuf au plat</h3>
                        <p>Assaisonné à la truffe sur lit de caviar</p>
                    </div>
                    <h3 class="prix">20€</h3>
                </div>

            </div>
            <p class="subTtitle">Plats</p>
            <div class="horizontalGreen"></div>
            <div class="cardMenuList flexbox">

                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Filet de boeuf aux herbes</h3>
                        <p>Accompagné de sa ribambelle de légumes</p>
                    </div>
                    <h3 class="prix aolute">40€</h3>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Parmentier de queue de boeuf</h3>
                        <p>À la truffe noire sur sa purée de panais</p>
                    </div>
                    <h3 class="prix">35€</h3>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Filet de turbot</h3>
                        <p>Aux agrumes</p>
                    </div>
                    <h3 class="prix">44€</h3>
                </div>

            </div>

            <p class="subTtitle">Desserts</p>
            <div class="horizontalGreen"></div>
            <div class="cardMenuList flexbox">

                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Paris-Brest</h3>
                        <p>Revisité</p>
                    </div>
                    <h3 class="prix">18€</h3>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Macaron au chocolat d'exception </h3>
                        <p>Et glace à la vanille de Madagascar</p>
                    </div>
                    <h3 class="prix">22€</h3>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Mousse au chocolat </h3>
                        <p>Au piment d'Espelette et à la truffe noire</p>
                    </div>
                    <h3 class="prix">23€</h3>
                </div>

            </div>
            <div class="commander">
                <button class="cmdButton">Commander</button>
            </div>
        </section>



    </main>
    
    <?php include('components/footer.php'); ?>

</body>
</html>