<?php
/*
Template Name: Wine page
*/
?>

<?php get_header(); ?>

<div class="frontpage-container">
    <header>
        <nav class="navbar  navbar-expand-lg navbar-dark ">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img class="logo" src="<?php echo get_template_directory_uri() . '/assets/logo/Plates-Logo.png'; ?>" alt="Logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav  justify-content-end  ml-auto">%3$s</ul>', // Use ml-auto to align items to the right
                        )
                    );
                ?>
            </div>
        </nav>
    </header>

    <div class="video-container">
        <video
            id="background-container"
            md:autoplay  
            autoplay
            loop
            muted
            class="video"
            style="object-fit: cover;" 
        > 
            <source src="<?php echo get_template_directory_uri() . '/assets/videos/timelaps.mp4'; ?>" type="video/mp4">
        </video>

        <div class="content">
            
            <div class="">
                <header class="page-title text-center gradient text-light pt-5 ">
                    <div class="d-flex justify-content-center flex-column">
                        <div>
                            <img class="title-logo" src="<?php the_field("plates") ?>" alt="">
                        </div> 
                        <div>
                            <h3><?php the_field("homeTitle")?></h3>
                            <p><?php the_field("subtext")?></p>
                        </div>
                    </div>
                </header>
            </div>

            <?php if (is_front_page()) : ?>
                <style>
                    .video-container {
                        position: relative;
                        height: 100vh;  
                        overflow: hidden;
                    }

                    .content {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        z-index: 2;
                    }

                    .frontpage-container {
                        background-image: url('<?php echo get_template_directory_uri() . '/assets/images/Pview.jpg'; ?>');
                        background-size: cover;
                        height: 100vh;
                        display: flex;
                        flex-direction: column;
                        position: relative; /* Add this for proper z-index stacking */
                    }

                    header, article {
                        z-index: 1; 
                    }
                </style>
            <?php endif; ?>

            <article>
                <?php 
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                }
                ?>
            </article>

            <div class="d-flex justify-content-center text-light">
                <p><?php the_field("homeTitle") ?></p> 
            </div>

            <!-- New Section -->
            <div class="row m-4">
                <!-- Your gallery images here -->
            </div>
            <!-- Gallery -->
        </div>
    </div>
</div>


<?php get_footer(); ?>
