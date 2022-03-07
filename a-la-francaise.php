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

    <title>À la française</title>
</head>
<body>
    
    <?php include('components/header.php'); ?>
    
    

    <main>
        <div class="imageResto">
            <img class="imgHead" src="style/img/toa-heftiba-DQKerTsQwi0-unsplash.jpg" alt="image restaurant À la française">
        </div>
        <section class="sectionMenu1">
            <div class="titre flexbox">
                <h1>À la française</h1>
                <div class="icoCoeur">
                    <i class="far fa-heart"></i>
                    <i class="fas fa-heart"></i>
                </div>
            </div>

            <p class="subTtitle">ENTRÉES</p>
            <div class="horizontalGreen"></div>
            <div class="cardMenuList flexbox appear1">

                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Tartare de poulpe acidulé</h3>
                        <p>Aux zestes d'orange</p>
                    </div>
                    <h3 class="prix">25€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Velouté de légumes d'antan</h3>
                        <p>Carotte, panais, topinambour</p>
                    </div>
                    <h3 class="prix">35€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Soupe à l'oignon</h3>
                        <p>Revisitée</p>
                    </div>
                    <h3 class="prix">20€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
            </div>

            <p class="subTtitle">Plats</p>
            <div class="horizontalGreen"></div>
            <div class="cardMenuList flexbox appear2">

                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Coquilles Saint-Jacques</h3>
                        <p>Accompagnées d'une purée de panais</p>
                    </div>
                    <h3 class="prix">40€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Magret de canard</h3>
                        <p>Et parmentier de pommes de terre</p>
                    </div>
                    <h3 class="prix">35€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Pigeonneau d’Ille-et-Vilaine</h3>
                        <p>Sur son lit de gnocchis aux légumes</p>
                    </div>
                    <h3 class="prix">44€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>

            </div>

            <p class="subTtitle">Desserts</p>
            <div class="horizontalGreen"></div>
            <div class="cardMenuList flexbox appear3">

                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Pétales de violettes glacés</h3>
                        <p>Et purée de noisettes</p>
                    </div>
                    <h3 class="prix">18€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Fondant au chocolat</h3>
                        <p>Revisité</p>
                    </div>
                    <h3 class="prix">22€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Millefeuille croustillant</h3>
                        <p>Myrtilles et pâte d’amande</p>
                    </div>
                    <h3 class="prix">23€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
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