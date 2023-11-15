<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <?php wp_head(); ?>
    <?php if (is_front_page()) : ?>
        <style>
            body {
                background-image: url('<?php echo get_template_directory_uri() . '/assets/images/Pview.jpg'; ?>');
                background-size: cover;
            }
        </style>
    <?php endif; ?>
</head>
<body <?php body_class('bg-image'); ?>>

    <header>

        <nav class="navbar navbar-expand-lg navbar-light d-flex ">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img class="logo" src="<?php echo get_template_directory_uri() . '/assets/logo/PlatesLogo.svg'; ?>" alt="Logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-center d-flex " id="navbarNav">
                <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            // 'container' => '',
                            // 'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav ml-auto ">%3$s</ul>', // Use ml-auto to align items to the right
                        )
                    );
                ?>
            </div>
        </nav>
    </header>

    <div>
        <header class="page-title  text-center gradient text-danger py-5">
            <h1 class="heading"><?php the_title(); ?></h1>
        </header>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
