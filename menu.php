<?php
/* Template Name: Food Menu Page */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food-menu</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="/menu-style.css">
</head>

<body>
    <div class="language">DK/EN</div>
    <section class="food">
        <h1>FOOD</h1>
        <div class="food-moto">
            <p>We make lovely comfort food that is easy to share, using the season’s products. Whoever shares, gets
                more!
                This is the logic behind our kitchen door.</p>
        </div>
    </section>

    <section class="christmas-menu">
        <div class=" christmas-menu-wrapper">

            <div class="christmas-menu-left-images">

                <?php $image1 = get_field("1stServingImg") ?>
                <img class="serving-image-left" src="<?php echo $image1 ?>" alt="">

                <?php $image2 = get_field("2ndServingImg") ?>
                <img class="serving-image-left-bottom" src="<?php echo $image2 ?>" alt="">
            </div>

            <div class="christmas-menu-text">

                <div class="christmas-menu-price">
                    <h1>CHRISTMAS SHARING MENU</h1>
                    <h2> 425 DKK </h2>
                </div>

                <div class="christmas-menu-price-text">
                    <div>
                        <h3 class="christmas-menu-text-left"> 1st serving </h3>
                        <?php $text1 = get_field("1stserving") ?>
                        <p>
                            <?php echo $text1 ?>
                        </p>
                    </div>

                    <div>
                        <h3 class="christmas-menu-text-right"> 2nd serving </h3>
                        <?php $text2 = get_field("2ndserving") ?>
                        <p>
                            <?php echo $text2 ?>
                        </p>
                    </div>

                    <div>
                        <h3 class="christmas-menu-text-left"> 3rd serving </h3>
                        <?php $text3 = get_field("3rdserving") ?>
                        <p>
                            <?php echo $text3 ?>
                        </p>
                    </div>

                    <div class="last-christmas-text-wrapper">
                        <h3 class="christmas-menu-text-right"> 4th serving </h3>
                        <?php $text4 = get_field("4thserving") ?>
                        <p>
                            <?php echo $text4 ?>
                        </p>
                    </div>

                </div>
            </div>

            <div class="christmas-menu-right-images">

                <?php $image3 = get_field("3rdServingImg") ?>
                <img class="serving-image-right" src="<?php echo $image3 ?>" alt="">

                <?php $image4 = get_field("4thServingImg") ?>
                <img class="serving-image-right-bottom" src="<?php echo $image4 ?>" alt="">

            </div>
        </div>
        <div class="christmas-menu-all-in">
            <h2> ALL IN +195 DKK </h2>
            <p>Caviar, truffles, sourdough bread & Black Angus (substitutes schnitzel)</p>
        </div>
    </section>

    <section class="a-la-carte">
        <div class="a-la-carte-wrapper">
            <h1> A LA CARTE</h1>
        </div>
        <div class="vegeterian-and-meat">
            <div class="vegeterian">
                <h2> VEGETARIAN </h2>

                <div>
                    <p>Hokkaido pumpkin & butternut squash -</p>
                    <p class="red-text">90</p>
                </div>
                <div>
                    <p>Pommes Rôsti with sour cream & chives - </p>
                    <p class="red-text">95</p>
                </div>
                <div>
                    <p>Leek, caramelized butter & roasted hazelnuts - </p>
                    <p class="red-text">105</p>
                </div>
            </div>

            <div class="meat">
                <h2> MEAT </h2>
                <p>Breast of pork with lingon berries & puffed pork rind - </p>
                <p class=" red-text">175</p>

                <div>
                    <p>Veal schnitzel with chantarelles-remoulade & baby sprouts - </p>
                    <p class="red-text">195</p>
                </div>
                <div>
                    <p>Black Angus flank with sauce bordelais & pommes frites - </p>
                    <p class="red-text">295</p>
                </div>
            </div>
        </div>

        <div class="seafood-cheese-and-dessert">
            <div class="seafood">
                <h2> SEAFOOD </h2>
                <div>
                    <p>Scallops with cucumber & cream - </p>
                    <p class="red-text">130</p>
                </div>
                <div>
                    <p>Lobster bisque with green oil & croutons - </p>
                    <p class="red-text">175</p>
                </div>
                <div>
                    <p>Monkfish with burned tomato, lobster foam & orzotto - </p>
                    <p class="red-text">295</p>
                </div>
            </div>
            <div class="cheese">
                <h2> CHEESE & DESSERT </h2>
                <div>
                    <p>3 cheeses blackcurrant & crispy bread</p>
                    <p class="red-text">125</p>
                </div>
                <div>
                    <p>Chocolate mousse with vanilla ice cream & bisquit - </p>
                    <p class="red-text">95</p>
                </div>
                <div>
                    <p>Rice, vanilla, almonds & cherry - </p>
                    <p class="red-text">95</p>
                </div>
            </div>
        </div>
    </section>
    <section class="snacks">
        <h1>SNACKS</h1>
        <div class="snacks-content">
            <div class="snacks-left-image-wrapper">
                <div>
                    <?php $snackImage1 = get_field("snacksImg1") ?>
                    <img class="snacks-left-image" src="<?php echo $snackImage1 ?>" alt="">
                </div>
            </div>

            <div class="snacks-text-wrapper">
                <div>
                    <?php $snackText1 = get_field("snackstext1") ?>
                    <?php $price1 = get_field("price1") ?>
                    <p>
                        <?php echo $snackText1 ?>
                    </p>
                    <p class="red-text"><?php echo $price1 ?></p>
                </div>
                <div>
                    <?php $snackText2 = get_field("snackstext2") ?>
                    <?php $price2 = get_field("price2") ?>
                    <p><?php echo $snackText2 ?></p>
                    <p class="red-text"><?php echo $price2 ?></p>
                </div>
                <div>
                    <?php $snackText3 = get_field("snackstext3") ?>
                    <?php $price3 = get_field("price3") ?>
                    <p><?php echo $snackText3 ?></p>
                    <p class="red-text"><?php echo $price3 ?></p>
                </div>
                <div>
                    <?php $snackText4 = get_field("snackstext4") ?>
                    <?php $price4 = get_field("price4") ?>
                    <p><?php echo $snackText4 ?></p>
                    <p class="red-text"><?php echo $price4 ?></p>
                </div>
                <div>
                    <?php $snackText5 = get_field("snackstext5") ?>
                    <?php $price5 = get_field("price5") ?>
                    <p><?php echo $snackText5 ?></p>
                    <p class="red-text"><?php echo $price5 ?></p>
                </div>
                <div>
                    <?php $snackText6 = get_field("snackstext6") ?>
                    <?php $price6 = get_field("price6") ?>
                    <p><?php echo $snackText6 ?></p>
                    <p class="red-text"><?php echo $price6 ?></p>
                </div>
                <div>
                    <?php $snackText7 = get_field("snackstext7") ?>
                    <?php $price7 = get_field("price7") ?>
                    <p><?php echo $snackText7 ?></p>
                    <p class="red-text"><?php echo $price7 ?></p>
                </div>
                <div>
                    <?php $snackText8 = get_field("snackstext8") ?>
                    <?php $price8 = get_field("price8") ?>
                    <p><?php echo $snackText8 ?></p>
                    <p class="red-text"><?php echo $price8 ?></p>
                </div>
                <div>
                    <?php $snackText9 = get_field("snackstext9") ?>
                    <?php $price9 = get_field("price9") ?>
                    <p><?php echo $snackText9 ?></p>
                    <p class="red-text"><?php echo $price9 ?></p>
                </div>
                <div>
                    <?php $snackText10 = get_field("snackstext10") ?>
                    <?php $price10 = get_field("price10") ?>
                    <p><?php echo $snackText10 ?></p>
                    <p class="red-text"><?php echo $price10 ?></p>
                </div>
                <div>
                    <?php $snackText11 = get_field("snackstext11") ?>
                    <?php $price11 = get_field("price11") ?>
                    <p><?php echo $snackText11 ?></p>
                    <p class="red-text"><?php echo $price11 ?></p>
                </div>
            </div>

            <div class="snacks-right-image-wrapper">
                <div>
                    <?php $snackImage2 = get_field("snacksImg2") ?>
                    <img class="snacks-right-image" src="<?php echo $snackImage2 ?>" alt="">
                </div>
            </div>
        </div>
    </section>

</body>

</html>