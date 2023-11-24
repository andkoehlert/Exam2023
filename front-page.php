<?php
$image = get_field("background");
$video = get_field("background_video");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            
        }

        .frontpage {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .frontpage video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100svh;
            
            z-index: 1; /* Place the content above the video or image */
            color: #fff; /* Set text color for better visibility */
        }

    </style>
</head>
<body>

<div class="frontpage">
    <?php if ($video) : ?>
        <video autoplay muted loop playsinline>
            <source src="<?php echo $video; ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    <?php else : ?>
        <!-- Fallback background image if no video is available -->
        <div style="background-image: url('<?php echo $image["url"]; ?>'); background-size: cover; height: 100%;"></div>
    <?php endif; ?>

    <div class="content-overlay">
        <?php get_header(); ?>
        <div class="d-flex justify-content-center">
            <h1 class="text-light d-flex"><a href="http://localhost:10076/home-esbjerg">Test</a></h1>
        </div>





       


    </div>
</div>

<header class="intro page-title text-center gradient text-light pt-5">
            <div class="d-flex justify-content-center flex-column">
                <div></div>
                <div>
                    <h3><?php the_field("homeTitle")?></h3>
                    <p><?php the_field("subtext")?></p>
                </div>


            </div>
        </header>

        <section class="d-flex justify-content-center">
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
