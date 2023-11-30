<?php
/*
Template Name: Wine page
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
<main id="wine"> 
<section>


   <div class="d-flex">
   <h2 class="page-title d-flex">
               Wine


            <ul class="menu-navigation d-flex justify-content-center">
                   <a  class="navigation-link" href="<?php echo get_permalink( get_page_by_path( 'home-esbjerg' ) ) ?>">
                       <li>
                       <img class="nav-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/home1.png" alt="Wine">
                       </li>
                   </a>
                   <a class="navigation-link" href="<?php echo get_permalink( get_page_by_path( 'menu' ) ) ?>">
                       <li>
                           <img class="nav-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu1.png" alt="Example Image">
                       </li>
                   </a>
           </ul>
       </h2>
            <ul class="languages ml-auto"><?php pll_the_languages() ?></ul>
   </div>
  
   <div class="page-description block mx-auto">
       <p>
       <?php the_field("wineintro")?>
       </p>
   </div>


   <div class="underline"></div>
  
   <div class="d-block d-md-flex mt-5">
       <div class="col text-center">
           <h3 class="menu-category">
               White
           </h3>
           <?php
               $plates_query = new WP_Query(array(
                'post_type' => 'white-wine',
                'posts_per_page' => -1,
                'orderby' => 'meta_value_num', // Use 'meta_value_num' for numeric fields
                'meta_key' => 'price_wine',   // Specify the custom field to use for ordering
                'order' => 'ASC', 
               ));


               if ($plates_query->have_posts()) {
                   echo '<ul class="menu-list">';
                   while ($plates_query->have_posts()) {
                       $plates_query->the_post();


                       $field_1 = get_post_meta(get_the_ID(), 'Type', true);
                       $field_2 = get_post_meta(get_the_ID(), 'price_wine', true);


                       echo '<li>' . $field_1 . '</li>';
                       echo '<li>' . $field_2 . '</li>';
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
               Red
           </h3>
           <?php
$plates_query = new WP_Query(array(
    'post_type' => 'red-wine',
    'posts_per_page' => -1,
    'orderby' => 'meta_value_num', // Use 'meta_value_num' for numeric fields
    'meta_key' => 'price_wine',   // Specify the custom field to use for ordering
    'order' => 'ASC',              // Order in ascending order, use 'DESC' for descending
));

if ($plates_query->have_posts()) {
    echo '<ul class="menu-list">';
    while ($plates_query->have_posts()) {
        $plates_query->the_post();

        $field_1 = get_post_meta(get_the_ID(), 'Type', true);
        $field_2 = get_post_meta(get_the_ID(), 'price_wine', true);

        echo '<li>' . $field_1 . '</li>';
        echo '<li>' . $field_2 . '</li>';
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
               Rosé
           </h3>
          
           <?php
               $plates_query = new WP_Query(array(
                   'post_type' => 'rose-wine',
                   'posts_per_page' => -1,
               ));


               if ($plates_query->have_posts()) {
                   echo '<ul class="menu-list">';
                   while ($plates_query->have_posts()) {
                       $plates_query->the_post();


                       $field_1 = get_post_meta(get_the_ID(), 'Type', true);
                       $field_2 = get_post_meta(get_the_ID(), 'price_wine', true);


                       echo '<li>' . $field_1 . '</li>';
                       echo '<li>' . $field_2 . '</li>';
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
              Bobler
           </h3>
           <?php
               $plates_query = new WP_Query(array(
                'post_type' => 'bubbles',
                'posts_per_page' => -1,
                'orderby' => 'meta_value_num', // Use 'meta_value_num' for numeric fields
                'meta_key' => 'price_wine',   // Specify the custom field to use for ordering
                'order' => 'ASC',              // Order in ascending order, use 'DESC' for descending
               ));


               if ($plates_query->have_posts()) {
                   echo '<ul class="menu-list">';
                   while ($plates_query->have_posts()) {
                       $plates_query->the_post();


                       $field_1 = get_post_meta(get_the_ID(), 'Type', true);
                       $field_2 = get_post_meta(get_the_ID(), 'price_wine', true);


                       echo '<li>' . $field_1 . '</li>';
                       echo '<li>' . $field_2 . '</li>';
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
               Desert
           </h3>
          
           <?php
               $plates_query = new WP_Query(array(
                'post_type' => 'dessert-wine',
                'posts_per_page' => -1,
                'orderby' => 'meta_value_num', // Use 'meta_value_num' for numeric fields
                'meta_key' => 'price_wine',   // Specify the custom field to use for ordering
                'order' => 'ASC',              // Order in ascending order, use 'DESC' for descending
               ));


               if ($plates_query->have_posts()) {
                   echo '<ul class="menu-list">';
                   while ($plates_query->have_posts()) {
                       $plates_query->the_post();


                       $field_1 = get_post_meta(get_the_ID(), 'Type', true);
                       $field_2 = get_post_meta(get_the_ID(), 'price_wine', true);


                       echo '<li>' . $field_1 . '</li>';
                       echo '<li>' . $field_2 . '</li>';
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




 


  





