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
     <!--    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri() . '/assets/logo/Plates-Logo.png'; ?>" alt="Logo">
                </a> -->
            <nav class="navbar pt-4 text-danger navbar-expand-lg navbar-dark position-absolute  ">
                

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse text-danger  " id="navbarNav">
                    <?php 
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'items_wrap' => '<ul id="" class="navbar-nav text-danger d-flex flex-column justify-content-end   ml-auto">%3$s</ul>', // Use ml-auto to align items to the right
                            )
                        );
                    ?>
                
            </nav>
            
        </header>


</body>
</html>

<style>
    .menu-main-menu-container li a  {

color: rgb(145, 6, 6);

}
</style>

