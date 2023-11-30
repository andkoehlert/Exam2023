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
<main id="Drinks"> 
<section>


 
<div class="d-flex">
   <h1 class="page-title d-flex">
               Drinks


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
       <p>
          <?php the_field("drinksintro")?>
       </p>
   </div>


   <div class="underline"></div>


 
  
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
                   'post_type' => 'plates-classics',
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
   </div>
   <div class="d-block d-md-flex mt-5">
       <div class="col text-center">
           <h3 class="menu-category">
               Plates Mocktails (No alcohol)
           </h3>
          
           <?php
               $plates_query = new WP_Query(array(
                   'post_type' => 'mocktails',
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
                   'post_type' => 'barsnacks',
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
   </div>




   <?php get_footer(); ?>
   </section>

</main>
</body>
  




