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
<main id="NewYears"> 
<section>

   <div class="d-flex pt-3">
       <h1 class="page-title d-flex">
       Christmas Sharing Menu


            <ul class="menu-navigation d-flex justify-content-center">
                   <a  class="navigation-link" href="<?php echo get_permalink( get_page_by_path( 'home-esbjerg' ) ) ?>">
                       <li>
                       <img class="nav-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/home1.png" alt="Example Image">
                       </li>
                   </a>
                   <a class="navigation-link" href="<?php echo get_permalink( get_page_by_path( 'menu' ) ) ?>">
                       <li>
                           <img class="nav-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu1.png" alt="Example Image">
                       </li>
                   </a>
           </ul>
       </h1>
       <ul class="languages ml-auto"><?php pll_the_languages() ?></ul>
   </div>
  
   <div class="page-description block mx-auto">
   <article >
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>
        </article> 
   </div>

 
   <div class="underline"></div>


   <div class="christmas-menu-price block ">
                    <h3 class="food_PageTitle">CHRISTMAS SHARING MENU</h3>
                    <h2> 425 DKK </h2>
                </div>

   <div class="d-block d-lg-flex">
           <div class="col">
               <?php
                   if (function_exists('get_field')) {
                       for ($i = 0; $i < 1; $i++) {
                           $image = get_field('leftphoto');


                           if ($image) {
                               echo '<img class="left-photo" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                           }
                       }
                   }
               ?>
       </div>
       <div class="col">
           <div class="serving-left">
                   <h4 class="serving-title">
                       1st serving
                   </h4>
                   <p class="serving-description">
                 <?php the_field("1_serving")?>
                   </p>
               </div>
               <div class="serving-right">
                   <h4 class="serving-title right-float">
                       2nd serving
                   </h4>
                   <p class="serving-description right-float">
                   <?php the_field("2_serving")?>
 
                   </p>
               </div>
               <div class="serving-left">
               <h4 class="serving-title">
                   3rd serving
               </h4>
               <p class="serving-description">
               <?php the_field("3_serving")?>

               </p>
           </div>
           <div class="serving-right">
               <h4 class="serving-title right-float">
                   4th serving
               </h4>
               <p class="serving-description right-float">
               <?php the_field("4_serving")?>
               </p>
           </div>
       </div>
       <div class="col">
           <?php
               if (function_exists('get_field')) {
                   for ($i = 0; $i < 1; $i++) {
                       $image = get_field('rightphoto');


                       if ($image) {
                           echo '<img class="right-photo" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                        }
                   }
               }
           ?>
       </div>
   </div>

   <section class="a-la-carte">
        <div class="a-la-carte-wrapper">
            <h1> A LA CARTE</h1>
        </div>
        <div class="vegeterian-and-meat">
            <div class="vegeterian">
            <h2>                    <?php the_field("headlinefood1")?>
 </h2>
                <div>
                <p class="menu-list">                    <?php the_field("veg1")?>
                 </p>
                <p class="red-text">                    <?php the_field("price_veg1")?>
                </p>

                </div>
                <div>
                <p class="menu-list">                    <?php the_field("veg2")?>
                 </p>
                <p class="red-text">                    <?php the_field("price_veg2")?>
                </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("veg3")?>
                 </p>
                <p class="red-text">                    <?php the_field("price_veg3")?>
                </p>
                </div>
            </div>

            <div class="meat">
            <h2>                    <?php the_field("headlinefood2")?>
 </h2>         <p class="menu-list">                    <?php the_field("meat_food1")?>
                 </p>
                <p class="red-text">                    <?php the_field("price_meat1")?>
                </p>

                <div>
                <p class="menu-list">                    <?php the_field("meat_food2")?>
                 </p>
                <p class="red-text">                    <?php the_field("price_meat2")?>
                </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("meat_food3")?>
                 </p>
                <p class="red-text">                    <?php the_field("price_meat3")?>
                </p>
                </div>
            </div>
        </div>

        <div class="seafood-cheese-and-dessert">
            <div class="seafood">
            <h2>                    <?php the_field("headlinefood3")?>
 </h2>                <div>
 <p class="menu-list">                    <?php the_field("fish_food1")?>
                 </p>
                <p class="red-text">                    <?php the_field("price_fish1")?>
                </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("fish_food2")?>
                 </p>
                <p class="red-text">                    <?php the_field("price_fish2")?>
                </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("fish_food3")?>
                 </p>
                <p class="red-text">                    <?php the_field("price_fish3")?>
                </p>
                </div>
            </div>
            <div class="cheese">
                <h2>                    <?php the_field("headlinefood4")?>
 </h2>
                <div>
                <p class="menu-list">                    <?php the_field("dessert_food1")?>
                 </p>
                <p class="red-text">                    <?php the_field("price_dessert1")?>
                </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("dessert_food2")?>
                 </p>
                <p class="red-text">                    <?php the_field("price_dessert2")?>
                </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("dessert_food3")?>
                 </p>
                <p class="red-text">                    <?php the_field("price_dessert3")?>
                </p>
                </div>
            </div>
        </div>
    </section>
    <section class="snacks">
        <h1>SNACKS</h1>
        <div class="snacks-content">
            <div class="snacks-left-image-wrapper">
                <div>
                <?php
               if (function_exists('get_field')) {
                   for ($i = 0; $i < 1; $i++) {
                       $image = get_field('leftphoto');


                       if ($image) {
                           echo '<img class="snacks-left-image" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                        }
                   }
               }
           ?>
                </div>
            </div>

            <div class="snacks-text-wrapper pb-5">
                <div>
                   
                <p class="menu-list">                    <?php the_field("snacktext1")?>
                 </p>
                <p class="red-text">                    <?php the_field("price1")?>
                </p>

                </div>
                <div>
                <p class="menu-list">                    <?php the_field("snacktext2")?>
            </p>
            <p class="red-text">                    <?php the_field("price2")?>
            </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("snacktext3")?>
            </p>
            <p class="red-text">                    <?php the_field("price3")?>
            </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("snacktext4")?>
            </p>
            <p class="red-text">                    <?php the_field("price4")?>
            </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("snacktext5")?>
            </p>
            <p class="red-text">                    <?php the_field("price5")?>
            </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("snacktext6")?>
            </p>
            <p class="red-text">                    <?php the_field("price6")?>
            </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("snacktext7")?>
            </p>
            <p class="red-text">                    <?php the_field("price7")?>
            </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("snacktext8")?>
            </p>
            <p class="red-text">                    <?php the_field("price8")?>
            </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("snacktext9")?>
            </p>
            <p class="red-text">                    <?php the_field("price9")?>
            </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("snacktext10")?>
            </p>
            <p class="red-text">                    <?php the_field("price10")?>
            </p>
                </div>
                <div>
                <p class="menu-list">                    <?php the_field("snacktext11")?>
            </p>
            <p class="red-text">                    <?php the_field("price11")?>
            </p>
                </div>
            </div>

            <div class="snacks-right-image-wrapper">
                <div>
                <?php
               if (function_exists('get_field')) {
                   for ($i = 0; $i < 1; $i++) {
                       $image = get_field('rightphoto');


                       if ($image) {
                           echo '<img class="snacks-right-image" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                        }
                   }
               }
           ?>
                </div>
            </div>
        </div>
    </section>











</section>

</main>
    
    </section>

    <?php get_footer()?>

</body>

</html>


<style> 

body {
  margin: 0px;
  font-family: "Arial", sans-serif;
  background-color: #fffdee;
  color: #000000;
} 
body::-webkit-scrollbar {
  display: none;
}

.red-text {
  color: #e9484e;
  font-family: 'plates';

}

.language {
  display: flex;
  justify-content: flex-end;
  font-size: 1em;
  color: #e9484e;
}

.food {
  width: 100%;
  display: flex;
  flex-direction: column;
  font-size: 1.5em;
  color: #e9484e;
}
.food h1 {
  font-size: 1.5em;
  line-height: 1.5em;
  color: #e9484e;
  position: relative;
  margin: 20px 50px;
  border-bottom: 3px solid #e9484e;
  border-image: linear-gradient(
      to right,
      transparent 0%,
      /* Start with transparent and immediately switch to color at 20% */
        #e9484e 0%,
      /* Start color at 20% */ #e9484e 70%,
      /* End color at 80% */ transparent 70%
    )
    1 stretch;
}

.food-moto {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  border-bottom: 3px solid #e9484e;
  border-image: linear-gradient(
      to right,
      transparent 32%,
      /* Start with transparent and immediately switch to color at 20% */
        #e9484e 32%,
      /* Start color at 20% */ #e9484e 95%,
      /* End color at 80% */ transparent 95%
    )
    1 stretch;
}

.food_PageTitle{
    font-family: "trade-gothic-next", sans-serif;
font-weight: 800;
font-style: normal;
}

.food-moto p {
  width: 35%;
  text-align: center;
  color: #000000;
  position: relative;
}

.christmas-menu-price {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.christmas-menu-price {
  color: #e9484e;
}

.christmas-menu {
  height: 1050px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  flex-direction: column;
}

.christmas-menu-wrapper {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: space-evenly;
  align-items: flex-start;
  flex-direction: row;
}

.christmas-menu-wrapper img {
  width: 304px;
  height: 350px;
  margin: 20px 0;
}

.christmas-menu-left-images {
  height: 90%;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  flex-direction: column;
}

.christmas-menu-right-images {
  height: 90%;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  flex-direction: column;
}

.christmas-menu-text {
  width: 40%;
  height: 75%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-direction: column;
  text-align: center;
  font-size: 1.2em;
}

.christmas-menu-price-text {
  width: 70%;
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-direction: column;
  margin-top: 50px;
}

.christmas-menu-text div h3 {
  color: #e9484e;
  border-bottom: 3px solid #e9484e;
  border-image: linear-gradient(
      to right,
      transparent 0%,
      /* Start with transparent and immediately switch to color at 20% */
        #e9484e 0%,
      /* Start color at 20% */ #e9484e 100%,
      /* End color at 80% */ transparent 100%
    )
    1 stretch;
  line-height: 1.5em;
  font-size: 1em;
}

.christmas-menu-text-left {
  text-align: start;
}

.christmas-menu-text-right {
  text-align: end;
}

.last-christmas-text-wrapper {
  width: 460px;
}

.christmas-menu-all-in {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  margin-bottom: 50px;
  margin-top: -80px;
}

.christmas-menu-all-in h2 {
  width: 460px;
  color: #e9484e;
  border-bottom: 3px solid #e9484e;
  border-image: linear-gradient(
      to right,
      transparent 0%,
      /* Start with transparent and immediately switch to color at 20% */
        #e9484e 0%,
      /* Start color at 20% */ #e9484e 100%,
      /* End color at 80% */ transparent 100%
    )
    1 stretch;
  line-height: 1.5em;
}

.a-la-carte {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  
}

.a-la-carte-wrapper h1 {
  display: flex;
  font-size: 3em;
  color: #e9484e;
  position: relative;
  align-items: center;
  justify-content: center;
  margin: 50px 50px;
  font-family: "trade-gothic-next", sans-serif;
font-weight: 800;
font-style: normal;
}

.vegeterian-and-meat {
  width: 100%;
  display: flex;
  justify-content: space-evenly;
  align-items: flex-start;
  flex-direction: row;
}

.vegeterian-and-meat h2 {
  color: #e9484e;
  font-family: "trade-gothic-next", sans-serif;
font-weight: 800;
font-style: normal;
}

.meat {
  width: 25%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
}

.vegeterian {
  height: 100%;
  width: 25%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
}

.seafood-cheese-and-dessert {
  width: 100%;
  display: flex;
  justify-content: space-evenly;
  align-items: flex-start;
  flex-direction: row;
  
}

.seafood-cheese-and-dessert h2 {
  color: #e9484e;
  font-family: "trade-gothic-next", sans-serif;
font-weight: 800;
font-style: normal;
}

.seafood {
  width: 26%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  margin-top: 30px;
}

.cheese {
  height: 100%;
  width: 25%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  margin-top: 30px;
}

.snacks {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-direction: column;
}

.snacks h1 {
  color: #e9484e;
  margin-bottom: 100px;
  font-family: "trade-gothic-next", sans-serif;
font-weight: 800;
font-style: normal;
}

.snacks-content {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  flex-direction: row;
}

.snacks-right-image,
.snacks-left-image {
  width: 304px;
  height: 380px;
}

.snacks-left-image-wrapper {
  height: 90%;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  flex-direction: column;
}

.snacks-left-image-wrapper div {
  width: 324px;
  height: 400px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: #e9484e 3px solid;
}

.snacks-right-image-wrapper div {
  width: 324px;
  height: 400px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: #e9484e 3px solid;
}

.snacks-right-image-wrapper {
  height: 90%;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  flex-direction: column;
}

.snacks-text-wrapper div {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

@media only screen and (max-width: 1090px) {
  html {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  body {
  
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  h1 {
    text-align: center;
  }

  .christmas-menu {
    width: 90%;
  }

  .food,
  .food-moto,
  .christmas-menu-wrapper,
  .christmas-menu-left-images,
  .christmas-menu-right-images,
  .christmas-menu-text,
  .christmas-menu-price-text,
  .a-la-carte,
  .vegeterian-and-meat,
  .seafood-cheese-and-dessert,
  .snacks,
  .snacks-content {
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .christmas-menu-wrapper img,
  .snacks-right-image,
  .snacks-left-image,
  .christmas-menu-left-images div {
    width: 50%;
    height: auto;
    margin: 10px 0;
    }
    .snacks-left-image-wrapper div,
    .snacks-right-image-wrapper div {
      width: fit-content;
      height: fit-content;
      border: none;
    }

    .christmas-menu-text-left,
    .christmas-menu-text-right {
      text-align: center;
    }

    h1,
    h2,
    h3,
    .food h1,
    .snacks h1 {
      font-size: 1.2em;
    }

    .christmas-menu-all-in h2 {
      width: 90%;
    }

    .food-moto p {
      width: 90%;
    }

    .vegeterian-and-meat,
    .seafood-cheese-and-dessert {
      flex-direction: column;
      align-items: center;
    }

    .meat,
    .vegeterian,
    .seafood,
    .cheese {
      width: 90%;
      margin-top: 15px;
    }

    .christmas-menu-price,
    .christmas-menu-text,
    .christmas-menu-price-text {
      margin-top: 15px;
    }

    .last-christmas-text-wrapper {
      width: 90%;
    }

    .a-la-carte-wrapper h1,
    .snacks-content,
    .snacks h1 {
      margin: 20px;
      padding: 0;
    }

    .christmas-menu,
    .snacks {
      height: auto;
    }

    .christmas-menu-all-in {
      margin: 0px;
    }

    .food h1,
    .food-moto {
      border-bottom: none;
    }
  }


  footer {
  background-color: #FFFDEE;
  
}

.reservation {
  color: #E9484E;
  padding: 10px;
  font-size: 20px;
  border-bottom: 3px solid #E9484E;
  font-family: "trade-gothic-next", sans-serif;
font-weight: 800;
font-style: normal;
}

.footer-title {
  color: #E9484E;
  padding: 10px;
  font-size: 18px;
  font-family: "trade-gothic-next", sans-serif;
font-weight: 800;
font-style: normal;
}
.info-box{
  width: 200px;
  height: auto;
}
.footer-text {
  font-size: 14px;
}



@media screen and (max-width:1000px) {
  .reservation {
      font-size: 18px;
      border-bottom: 2px solid #E9484E;
    }
    .footer-title {
      color: #E9484E;
      padding: 10px;
      font-weight: 600;
      font-size: 16px;
    }
  .info-box{
      width: 180px;
      height: auto;
  }
  .footer-text {
      font-size: 12px;
  }
}
@media screen and (max-width:600px) {
  .reservation {
      font-size: 15px;
      border-bottom: 2px solid #E9484E;
    }
    .footer-title {
      color: #E9484E;
      padding: 10px;
      font-weight: 600;
      font-size:12px;
      
    }



  .info-box{
      width: 150px;
      height: auto;
  }
  .footer-text {
      font-size: 11px;
  }
  .heading_frontpage_intro{
    font-size: 20px;
  }
}
</style>