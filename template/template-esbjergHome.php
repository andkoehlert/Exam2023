<?php
/*
Template Name: Home Esbjerg
*/
?>

<?php
$image = get_field("background-image");
$video = get_field("background_video");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php wp_head(); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
   
</head>
<body>
<main id="EsbjergHome"> 

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

    <!-- Content overlay this is the overlay that allows the image & video to work with ACF -->
    <div class="content-overlay">

    <nav class="navbar  navbar-expand-lg" >
    <div class="container-fluid">
        <ul class="navbar-nav d-flex  flex-row w-100 ">
        <?php get_header(); ?>

          
            <li class="nav-item ml-auto">
            <ul class="languages"><?php pll_the_languages() ?></ul>
            </li>
            
        </ul>
    </div>
</nav>


    


<?php $image = get_field("plates") ?> 

<div class="centered-content justify-content-center flex-column d-flex  text-light " >
<a class="d-flex justify-content-center pb-2" href="<?php echo get_permalink(get_page_by_path('home-esbjerg')) ?>" class="nav-link ">
<img src="<?php echo $image["url"] ?>" alt="<?php echo $image["alt"] ?>" class="img-fluid frontpage_img rounded ">
                    
                    
                    
                </a>
<div style="background-color: rgba(233, 72, 78, 0.3);">
    <p class="AboutSubText d-flex justify-content-center pt-2">Restaurant & Cocktailbar</p
    
>
<h1 class="AboutHeadingFront d-flex justify-content-center "> ESBJERG</h1>
</div>

</div> 


    </div>
    
</div>


<section class="aboutUS"

>

<article class="container pt-5"
style="max-width: 1000px;"

>
<section class="d-flex flex-column flex-md-row justify-content-between align-items-center mx-auto">
    <div class="p-2 text-left col-md-6 pb-5">
        <h1 class="AboutHeadingFront text-danger">
            <?php the_field("aboutheading")?>
        </h1>
        <hr class="bg-danger">
        <p class="AboutSubText text-left">
            <?php the_field("abouttext")?>
        </p>
        <p class="AboutSubText text-left">
            <?php the_field("aboutsubtext")?>
        </p>
        <p>
            - Lars Svendsen og Team Plates Esbjerg
        </p>
    </div>
    <div class="p-2 col-md-6 d-flex justify-content-center pt-5">
        <?php $image = get_field("aboutfood") ?> 
        <img src="<?php echo $image["url"] ?>" alt="<?php echo $image["alt"] ?>" class="img-fluid rounded border border-danger p-4  about_img">
    </div>
</section>



<section class="container aboutUS d-flex flex-column flex-md-row justify-content-between align-items-center mx-auto ">

  <div class="p-2 col-xs-12 col-md-6  pt-5">
    <?php $image = get_field("aboutdrink") ?> 
    <img src="<?php echo $image["url"] ?>" alt="<?php echo $image["alt"] ?>" class="img-fluid rounded about_img">
</div>
<div class="p-2 text-right col-xs-12 col-md-6 pb-5">
    <h1 class="AboutHeadingFront text-danger">
    <?php the_field("aboutheading")?>
    </h1>
    <hr class="bg-danger">
    <p class="AboutSubText text-left">
    <?php the_field("abouttext2")?>


    </p>
  </div>
</section>


<!--  -->
<section class="container aboutUS flex-column flex-md-row d-flex justify-content-between align-items-center mx-auto ">
    <div class="box p-2 text-left col-xs-12 col-md-4 border border-danger p-4 mt-5" style="padding-right: 50px;">
        <p>INTRODUCING:</p>    
        <h1 class="AboutHeadingFront text-danger">
            plates Head chef,
            <br>
            David Johansen 
        </h1>
        <hr class="bg-danger">
        <p class="AboutSubText text-left">
            <?php the_field("abouttext2")?>
        </p>
    </div>
    <div class="p-2 col-xs-12 col-md-6 d-flex justify-content-center mb-5">
        <?php $image = get_field("headchef") ?> 
        <img src="<?php echo $image["url"]?>" alt="<?php echo $image["alt"] ?>" class="img-fluid rounded about_img">
    </div>
</section>

<div class="text-right">
<h1 class="AboutHeadingFront text-danger ">
    <?php the_field("skybar")?>
    </h1>
    <hr class="bg-danger">
</div>


<section class="container aboutUS d-flex flex-column flex-md-row justify-content-between align-items-center mx-auto ">

  <div class="p-2 col-xs-12 col-md-6  pt-5">
    <?php $image = get_field("about_skybar") ?> 
    <img src="<?php echo $image["url"] ?>" alt="<?php echo $image["alt"] ?>" class="img-fluid rounded about_img">
</div>
<div class="p-2 text-right col-xs-12 col-md-6 pb-5">
    <h1 class="AboutHeadingFront text-danger">
    <?php the_field("aboutheading")?>
    </h1>
    <hr class="bg-danger">
    <p class="AboutSubText text-left">
    <?php the_field("abouttext2")?>


    </p>
  </div>
</section>
</article>

</section>



<?php get_footer(); ?>
</main>
</body>

</html>
<style>
       
       @font-face {
  
  font-family: 'plates';
  src: url('assets/fonts/Trade\ Gothic\ LT\ Std\ Extended.otf') format('woff2'),
  /* You can specify different font file formats and their paths */
  /* Other font properties (e.g., font-weight, font-style) can be added here */
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
            height: 100vh;
            
            z-index: 1;
            
        }
        .logo {
    width: 20em;
    margin-right: 10px;
    position: relative;
    justify-content: center;
}
        .centered-content {
    position: absolute;
    top: 50%;
    left: -100%; /* Start outside the left side of the screen */
    opacity: 0; /* Initially set opacity to 0 */
    width: 100%;
    animation: moveInFromLeftAnimation 1s forwards; /* Animation to move from outside left to center with opacity transition */
  
}

  @keyframes moveInFromLeftAnimation {
    to {
      left: 0;
      opacity: 1;
    }
  }

.AboutHeadingFront{
    font-family: "trade-gothic-next", sans-serif;
font-weight: 800;
font-style: normal;
}
.Hometitle{
color: rgba(233, 72, 78, 1);;

}

.AboutSubText{
    font-family: 'plates';

}

.aboutUS{
    background-color: #FFFDEE;
 
}


    </style>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>