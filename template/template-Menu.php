<?php
/*
Template Name: Menu Page
*/
?>

<?php get_header(); ?>
<a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img class="logo" src="<?php echo get_template_directory_uri() . '/assets/logo/Plates-Logo.png'; ?>" alt="Logo">
                </a>
            <nav class="navbar  navbar-expand-lg navbar-dark position-absolute  ">
                

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse   " id="navbarNav">
                    <?php 
                        wp_nav_menu(
                            array(
                                'menu' => 'primary',
                                'items_wrap' => '<ul id="" class="navbar-nav  d-flex flex-column justify-content-end  ml-auto">%3$s</ul>', // Use ml-auto to align items to the right
                            )
                        );
                    ?>
                
            </nav>
            
        </header>
<div class="custom-about-content d-flex justify-content-center">
    <!-- Your custom content for the About page goes here -->
    <h1>Menu</h1>
    <p>This is our menu page content.</p>
</div>


<?php get_footer(); ?>
