<?php get_header(); ?>

<div class="frontpage-container">
<header>
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
        <div class="content">
            
            <div>
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

<div>
            <header class="intro page-title text-center gradient text-light pt-5 ">
                <div class="d-flex justify-content-center flex-column">
                    <div>
                    </div> 
                    <div>
                        <h3><?php the_field("homeTitle")?></h3>
                        <p><?php the_field("subtext")?></p>
                    </div>
                </div>
            </header>
        </div>
 <section class=" d-flex justify-content-center">
  <div class="p-2">Flex item 1</div>
  
</section>
<section class="aboutUS d-flex justify-content-between align-items-center mx-auto ">
  <div class="p-2 text-center col-xs-12 col-md-4">
    <h1>
        About us
    </h1>
    <hr>
    <p class="">
    Here we share both the clouds –
 and the portions
On the 17th floor you will find the Plates 
restaurant & cocktail bar.
The view is indescribable, so we won’t 
even try.
The kitchen is located in the sky under the 
clouds – and that obliges.


    </p>
  </div>
  <div class="p-2 col-xs-12 col-md-6 ">
    <?php $image = get_field("aboutfood") ?> 
    <img src="<?php echo $image["sizes"]["large"] ?>" alt="<?php echo $image["alt"] ?>" class="img-fluid">
</div>
</section>

<?php get_footer(); ?>
</body>
</html>
