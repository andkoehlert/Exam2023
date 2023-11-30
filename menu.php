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
            <p>We make lovely comfort food that is easy to share, using the season’s products.Whoever shares, gets more!
                This is the logic behind our kitchen door.</p>
        </div>
    </section>

    <div class="christmas-menu-price">
        <h1>CHRISTMAS SHARING MENU</h1>
        <h2> 425 DKK </h2>
    </div>

    <section class="christmas-menu">

        <div class="christmas-menu-left-images">
            <?php $image = get_field("servingimage") ?>
            <img class="serving-image-left" src="<?php echo $image ?>" alt="">
            <?php $image = get_field("servingimage") ?>
            <img class="serving-image-left-bottom" src="<?php echo $image ?>" alt="">
        </div>
        <div class="christmas-menu-text">
            <div>
                <h3> 1st serving </h3>
                <?php $text = get_field("1stserving") ?>
                <p>
                    <?php echo $text ?>
                </p>
            </div>

            <div>
                <h3> 2nd serving </h3>
                <p>Grilled brioche, duck confit & red cabbage Pommes Rôsti with sour cream & chives (Truffles +55) Veal
                    schnitzel with chantarelles-remoulade & baby sprouts</p>
            </div>

            <div>
                <h3> 3rd serving </h3>
                <p>Leek, caramelized butter & roasted hazelnuts Hokkaido pumpkin & butternut squash Breast of pork with
                    lingon berries & puffed pork rind(Opgr. Black Angus with sauce bordelais & pommes frites +125)</p>

            </div>

            <div class="last-christmas-text-wrapper">
                <h3> 4th serving </h3>
                <p>Rice, vanilla, almonds & cherry</p>
            </div>

        </div>

        <div class="christmas-menu-right-images">
            <?php $image = get_field("servingimage") ?>
            <img class="serving-image-right" src="<?php echo $image ?>" alt="">
            <?php $image = get_field("servingimage") ?>
            <img class="serving-image-right-bottom" src="<?php echo $image ?>" alt="">
        </div>
    </section>

    <div class="christmas-menu-all-in">
        <h2> ALL IN +195 DKK </h2>
        <p>Caviar, truffles, sourdough bread & Black Angus (substitutes schnitzel)</p>
    </div>

    <section class="snacks">
        <div class="snacks-1st-part">
            <h1>SNACKS</h1>
            <div>
                <p>Pommes frites with herb salt & aioli -</p>
                <p class="red-text">65</p>
            </div>
            <div>
                <p>2 Oysters au natural or soy & sesame -</p>
                <p class="red-text">70</p>
            </div>
            <div>
                <p>Pommes frites with parmesan & truffel - </p>
                <p class="red-text">75</p>
            </div>
            <div>
                <p>Potato croquettes & cheese -</p>
                <p class="red-text">75</p>
            </div>
            <div>
                <p>Smoked cod with beetroot & blackberry -</p>
                <p class="red-text">80</p>
            </div>
        </div>
        <div class="snacks-image">
            <img class="snacks-image" src="" alt="Snacks">
        </div>
        <div class="snacks-2nd-part">
            <div>
                <p>Sardines with grilled lemon, aioli & focaccia -</p>
                <p class="red-text">95</p>
            </div>
            <div>
                <p>Croquettes of pork shank with tarragon mayo -</p>
                <p class="red-text">95</p>
            </div>
            <div>
                <p>Sliders with crispy chicken & chipotle mayo - </p>
                <p class="red-text">100</p>
            </div>
            <div>
                <p>PDab with kohlrabi & apple - </p>
                <p class="red-text">100</p>
            </div>
            <div>
                <p>20 gr. Oscietra Imperial caviar -</p>
                <p class="red-text">245</p>
            </div>
        </div>
    </section>
    <section class="a-la-carte">
        <div class="a-la-carte">
            <h1> A LA CARTE</h1>
        </div>
        <div class="vegeterian">
            <h2> VEGETARIAN </h2>
        </div>
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
        <div class="oysters-image">
            <img class="oysters-image" src="" alt="Oysters">
        </div>
        <div class="seafood">
            <h2> SEAFOOD </h2>
        </div>
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
        <div class="meat">
            <h2> MEAT </h2>
        </div>
        <p>Breast of pork with lingon berries & puffed pork rind - </p>
        <p class="red-text">175</p>
        </div>
        <div>
            <p>Veal schnitzel with chantarelles-remoulade & baby sprouts - </p>
            <p class="red-text">195</p>
        </div>
        <div>
            <p>Black Angus flank with sauce bordelais & pommes frites - </p>
            <p class="red-text">295</p>
        </div>
        <div class="cheese-&-dessert">
            <h2> CHEESE & DESSERT </h2>
        </div>
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
    </section>

</body>

</html>