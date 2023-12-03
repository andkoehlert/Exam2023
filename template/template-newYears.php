<?php
/*
Template Name: New Years
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
<main id="NewYears"> 
<section>

   <div class="d-flex pt-3">
       <h1 class="page-title d-flex">
               New Year's


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


   <div class="block mx-auto">
    <h1 class="newyears-price">NEW YEARS MENU</h1>
       <p class="newyears-price">
       1000DKK
       </p>
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
                   <?php the_field("1st_serving")?>

                   </p>
               </div>
               <div class="serving-right">
                   <h4 class="serving-title right-float">
                       2nd serving
                   </h4>
                   <p class="serving-description right-float">
                   <?php the_field("2st_serving")?>
  
                   </p>
               </div>
               <div class="serving-left">
               <h4 class="serving-title">
                   3rd serving
               </h4>
               <p class="serving-description">
               <?php the_field("3st_serving")?>

               </p>
           </div>
           <div class="serving-right">
               <h4 class="serving-title right-float">
                   4th serving
               </h4>
               <p class="serving-description right-float">
               <?php the_field("4st_serving")?>
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











<!-- 


   <div class="serving-left">
       <h4 class="serving-title">
           1st serving
       </h4>
       <p class="serving-description">
        <?php the_field("1st_serving")?>
       </p>
   </div>
   <div class="serving-right">
       <h4 class="serving-title right-float">
           2nd serving
       </h4>
       <p class="serving-description right-float">
       <?php the_field("2st_serving")?>

       </p>
   </div>


   


   <div class="serving-left">
       <h4 class="serving-title">
           3rd serving
       </h4>
       <p class="serving-description">
       <?php the_field("3st_serving")?>

       </p>
   </div>
   <div class="serving-right">
       <h4 class="serving-title right-float">
           4th serving
       </h4>
       <p class="serving-description right-float">
       <?php the_field("4st_serving")?>

       </p>
   </div> -->
   <?php get_footer()?>
</section>

</main>
</body>








