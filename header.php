<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <?php wp_head(); ?>
   <?php wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), null, true); ?>
</head>
<body >
<header>
           <nav class="navbar pt-4 navbar-expand-lg navbar-dark position-absolute  ">
              


               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
              
               <div class="collapse navbar-collapse" id="navbarNav">
                   <?php
                       wp_nav_menu(
                           array(
                               'menu' => 'primary',
                               'items_wrap' => '<ul id="" class="navbar-nav  d-flex flex-column flex-md-row menu-items ">%3$s</ul>', // Use ml-auto to align items to the right
                           )
                       );
                   ?>
              
           </nav>
          
       </header>




</body>
</html>