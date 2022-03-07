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

    <title>Le délice des sens</title>
</head>
<body>
    
    <?php include('components/header.php'); ?>
    
    

    <main>
        <div class="imageResto">
            <img class="imgHead" src="style/img/louis-hansel-shotsoflouis-qNBGVyOCY8Q-unsplash.jpg" alt="image restaurant Le délice des sens">
        </div>
        <section class="sectionMenu1">
            <div class="titre flexbox">
                <h1>Le délice des sens</h1>
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
                        <h3>Tartare de thon</h3>
                        <p>Assaisonné au yuzu</p>
                    </div>
                    <h3 class="prix">25€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Bouchée de homard croustillant </h3>
                        <p>Et sa farandole de petits légumes</p>
                    </div>
                    <h3 class="prix">35€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Velouté de cèpes</h3>
                        <p>Aux truffes</p>
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
                        <h3>Poulet rôti aux herbes de Provence</h3>
                        <p>Et sa crème de truffe</p>
                    </div>
                    <h3 class="prix">40€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Langouste rôtie</h3>
                        <p>Et ses légumes de saison</p>
                    </div>
                    <h3 class="prix">35€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Côte de boeuf Angus</h3>
                        <p>Et sa purée de panais</p>
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
                        <h3>Farandole de desserts</h3>
                        <p>Du chef</p>
                    </div>
                    <h3 class="prix">18€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Crème brulée</h3>
                        <p>Revisitée</p>
                    </div>
                    <h3 class="prix">22€</h3>
                    <div class="cardAnim">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="card3 flexbox">
                    <div class="card3Txt">
                        <h3>Tiramisu</h3>
                        <p>À la noisette</p>
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