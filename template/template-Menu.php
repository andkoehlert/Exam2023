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
<main id="Menu"> 

<div class="custom-about-content justify-content-center menu-box">
<nav class="navbar  navbar-expand-lg" >
    <div class="container-fluid">
        <ul class="navbar-nav d-flex flex-row w-100 ">
          
        <li class="nav-item ml-auto">
            <ul class="languages"><?php pll_the_languages() ?></ul>
            </li>
           
            
        </ul>
    </div>
</nav>



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
               <?php the_field("food")?>
               </li>
            </a>
           <a  class="menu-link block mx-auto" href="<?php echo get_permalink( get_page_by_path( 'plates-wine' ) ) ?>">
               <li class="menu-item-box m-3 text-center block mx-auto">
               <?php the_field("wine")?>

               </li>
            </a>
              
           </a>
           <a  class="menu-link block mx-auto" href="<?php echo get_permalink( get_page_by_path( 'drinks' ) ) ?>">
               <li class="menu-item-box m-3 text-center block mx-auto">
               <?php the_field("drinks")?>

               </li>
            </a>
            <a  class="menu-link block mx-auto" href="<?php echo get_permalink( get_page_by_path( 'new years' ) ) ?>">
               <li class="menu-item-box m-3 text-center block mx-auto">
               <?php the_field("new_years")?>
               </li>
            </a>
            <a  class="menu-link block mx-auto" href="<?php echo get_permalink( get_page_by_path( 'home-esbjerg' ) ) ?>">
               <li class="menu-item-box m-3 text-center block mx-auto">
               <?php the_field("home")?>

               </li>
            </a>
       </ul>


 


  
</div>




<?php get_footer(); ?>
</main>
</body>