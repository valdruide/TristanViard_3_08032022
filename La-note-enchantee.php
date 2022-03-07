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
            <img class="imgHead" src="style/img/stil-u2Lp8tXIcjw-unsplash.jpg" alt="image restaurant La note enchantée">
        </div>
        <section class="sectionMenu1">
            <div class="titre flexbox">
                <h1>La note enchantée</h1>
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
                        <h3>Ravioles de foie gras </h3>
                        <p>Accompagnés de leur crème à la truffe</p>
                    </div>
                    <h3 class="prix">25€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Caviar osciètre </h3>
                        <p>Sur blini à la farine de blé noir</p>
                    </div>
                    <h3 class="prix">35€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Homard et espuma de potiront</h3>
                        <p>Mariné aux zestes d'orange</p>
                    </div>
                    <h3 class="prix">20€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Foie gras de canard cuit entier</h3>
                        <p>Confiture de figue et pain toasté</p>
                    </div>
                    <h3 class="prix">35€</h3>
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
                        <h3>Noix de coquilles Saint-Jacques</h3>
                        <p>Sur lit de purée de céleri-rave</p>
                    </div>
                    <h3 class="prix">40€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Langoustine poêlée</h3>
                        <p>Purée de patate douce</p>
                    </div>
                    <h3 class="prix">35€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Mijoté de queue de boeuf </h3>
                        <p>Et riz sauvage aux zestes de citron</p>
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
                        <h3>Macaron noisette et chocolat</h3>
                        <p>Glace au caramel brun et sel de Guérande</p>
                    </div>
                    <h3 class="prix">18€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Baba au rhum revisité</h3>
                        <p>Avec son coulis de citron</p>
                    </div>
                    <h3 class="prix">22€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Tarte au citron meringuée</h3>
                        <p>Déstructurée</p>
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