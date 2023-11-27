<?php
/*
Template Name: Menu Page
*/
?>



<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <?php wp_head(); ?>
   <?php wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), null, true); ?>
</head>


<body>
<div class="custom-about-content justify-content-center menu-box">




   <?php
   if (function_exists('get_field')) {


       $image = get_field('menulogo');


       if ($image) {
           echo '<img class="menu-logo" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
       }
   }
   ?>
       <ul class="list-group">
       <a  class="menu-link block mx-auto" href="<?php echo get_permalink( get_page_by_path( 'food' ) ) ?>">
               <li class="menu-item-box m-3 text-center block mx-auto">
                   Food
               </li>
            </a>
           <a  class="menu-link block mx-auto" href="<?php echo get_permalink( get_page_by_path( 'wine' ) ) ?>">
               <li class="menu-item-box m-3 text-center block mx-auto">
                   Wine
               </li>
            </a>
              
           </a>
           <a  class="menu-link block mx-auto" href="<?php echo get_permalink( get_page_by_path( 'drinks' ) ) ?>">
               <li class="menu-item-box m-3 text-center block mx-auto">
                   Drinks
               </li>
            </a>
            <a  class="menu-link block mx-auto" href="<?php echo get_permalink( get_page_by_path( 'new-year' ) ) ?>">
               <li class="menu-item-box m-3 text-center block mx-auto">
                   New Years
               </li>
            </a>
       </ul>


 


  
</div>




<?php get_footer(); ?>
