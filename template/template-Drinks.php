<?php
/*
Template Name: Drinks Page
*/


?>




<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <?php wp_head(); ?>
   <?php wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), null, true); ?>
</head>


<body class="menu-box">


   <div class="d-flex">
       <h1 class="page-title">Drinks</h1>
       <div class="language">DK/EN</div>
   </div>
  
   <div class="page-description block mx-auto">
       <p>
           We make lovely comfort food that is easy to share,
           using the seasonal products.
           Whoever shares, gets more!
           This is the logic behind our kitchen door.
       </p>
   </div>


   <div class="underline"></div>


   <div class="block mx-auto mt-4 drink-description">
           <p>
               The Ambassador cocktail for November
               Blue & Breezy
               Sevablødda, dark rum, ginger beer & pumpkin spice
               125
               Designed in cooperation with BlueByte. For every sold
               ambassador cocktail in November, Restaurant Plates
               donates 10 kr. towards Recorvery Bulls.
               An association helping people through tough times,
               through their active & drug free community.
               This drink is also available as a mocktail.
           </p>
   </div>  
  
   <div class="d-block d-md-flex mt-5">
       <div class="col text-center">
           <h3 class="menu-category">
               Plates Originals
           </h3>
           <?php
               $plates_query = new WP_Query(array(
                   'post_type' => 'plates-originals',
                   'posts_per_page' => -1,
               ));


               if ($plates_query->have_posts()) {
                   echo '<ul class="menu-list">';
                   while ($plates_query->have_posts()) {
                       $plates_query->the_post();


                       $field_1 = get_post_meta(get_the_ID(), 'drinkname', true);
                       $field_2 = get_post_meta(get_the_ID(), 'ingredients', true);
                       $field_3 = get_post_meta(get_the_ID(), 'price', true);


                       echo '<li>' . $field_1 . '</li>';
                       echo '<li>' . $field_2 . '</li>';
                       echo '<li>' . $field_3 . '</li>';
                   }


                   echo '</ul>';
                   wp_reset_postdata();
               } else {
                   echo 'No items to display';
               }
               ?>
       </div>
       <div class="col text-center">
           <h3 class="menu-category">
               Plates Classics
           </h3>
           <?php
               $plates_query = new WP_Query(array(
                   'post_type' => 'plates-originals',
                   'posts_per_page' => -1,
               ));


               if ($plates_query->have_posts()) {
                   echo '<ul class="menu-list">';
                   while ($plates_query->have_posts()) {
                       $plates_query->the_post();


                       $field_1 = get_post_meta(get_the_ID(), 'drink-name', true);
                       $field_2 = get_post_meta(get_the_ID(), 'ingridients', true);
                       $field_3 = get_post_meta(get_the_ID(), 'price', true);


                       echo '<li>' . $field_1 . '</li>';
                       echo '<li>' . $field_2 . '</li>';
                       echo '<li>' . $field_3 . '</li>';
                   }


                   echo '</ul>';
                   wp_reset_postdata();
               } else {
                   echo 'No items to display';
               }
               ?>
       </div>
   </div>
   <div class="d-block d-md-flex mt-5">
       <div class="col text-center">
           <h3 class="menu-category">
               Plates Originals
           </h3>
          
           <?php
               $plates_query = new WP_Query(array(
                   'post_type' => 'plates-originals',
                   'posts_per_page' => -1,
               ));


               if ($plates_query->have_posts()) {
                   echo '<ul class="menu-list">';
                   while ($plates_query->have_posts()) {
                       $plates_query->the_post();


                       $field_1 = get_post_meta(get_the_ID(), 'drink-name', true);
                       $field_2 = get_post_meta(get_the_ID(), 'ingridients', true);
                       $field_3 = get_post_meta(get_the_ID(), 'price', true);


                       echo '<li>' . $field_1 . '</li>';
                       echo '<li>' . $field_2 . '</li>';
                       echo '<li>' . $field_3 . '</li>';
                   }


                   echo '</ul>';
                   wp_reset_postdata();
               } else {
                   echo 'No items to display';
               }
               ?>
          
       </div>
       <div class="col text-center">
           <h3 class="menu-category">
               Plates Classics
           </h3>
           <?php
               $plates_query = new WP_Query(array(
                   'post_type' => 'plates-originals',
                   'posts_per_page' => -1,
               ));


               if ($plates_query->have_posts()) {
                   echo '<ul class="menu-list">';
                   while ($plates_query->have_posts()) {
                       $plates_query->the_post();


                       $field_1 = get_post_meta(get_the_ID(), 'drink-name', true);
                       $field_2 = get_post_meta(get_the_ID(), 'ingridients', true);
                       $field_3 = get_post_meta(get_the_ID(), 'price', true);


                       echo '<li>' . $field_1 . '</li>';
                       echo '<li>' . $field_2 . '</li>';
                       echo '<li>' . $field_3 . '</li>';
                   }


                   echo '</ul>';
                   wp_reset_postdata();
               } else {
                   echo 'No items to display';
               }
               ?>
       </div>
   </div>






</body>
  




<?php get_footer(); ?>
