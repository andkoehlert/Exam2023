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
        <ul class="navbar-nav d-flex flex-row w-100 ">
            <li class="nav-item">
                <a class="nav-link text-light h4" href="<?php echo get_permalink(get_page_by_path('home-esbjerg')) ?>">Esbjerg</a>
                <?php get_header(); ?>

            </li>
            <li class="nav-item">
                <a class="nav-link text-light h4" href="https://book.dinnerbooking.com/dk/da-DK/book/index/3073/2">|    Book</a>               
             <?php get_header(); ?>

            </li>
          
            <li class="nav-item ml-auto">
            <ul class="languages"><?php pll_the_languages() ?></ul>
            </li>
            
        </ul>
    </div>
</nav>


    


<div class="centered-content justify-content-center flex-column d-flex  text-light " >
<a class="d-flex justify-content-center pb-2" href="<?php echo home_url(); ?>">
                    <img class="logo " src="<?php echo get_template_directory_uri() . '/assets/logo/Plates-Logo.png'; ?>" alt="Logo"
                    
                    
                    >
                </a>
<div style="background-color: rgba(233, 72, 78, 0.3);">
    <p class="d-flex justify-content-center pt-2">Restaurant & Cocktailbar</p
    
>
<h1 class="d-flex justify-content-center ">plates ESBJERG</h1>
</div>

</div> 


    </div>
    
</div>


<section class="aboutUS"

>

<article class="container pt-5"
style="max-width: 1000px;"

>
<section class="aboutUS d-flex flex-column flex-md-row justify-content-between align-items-center mx-auto">
    <div class="p-2 text-left col-md-6 pb-5">
        <h1 class="text-danger">
            <?php the_field("aboutheading")?>
        </h1>
        <hr class="bg-danger">
        <p class="text-left">
            <?php the_field("abouttext")?>
        </p>
        <p class="text-left">
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
    <h1 class="text-danger">
    <?php the_field("aboutheading")?>
    </h1>
    <hr class="bg-danger">
    <p class="text-left">
    <?php the_field("abouttext2")?>


    </p>
  </div>
</section>


<!--  -->
<section class="container aboutUS flex-column flex-md-row d-flex justify-content-between align-items-center mx-auto ">
    <div class="box p-2 text-left col-xs-12 col-md-4 border border-danger p-4 mt-5" style="padding-right: 50px;">
        <p>INTRODUCING:</p>    
        <h1 class="text-danger">
            plates Head chef,
            <br>
            David Johansen 
        </h1>
        <hr class="bg-danger">
        <p class="text-left">
            <?php the_field("abouttext2")?>
        </p>
    </div>
    <div class="p-2 col-xs-12 col-md-6 d-flex justify-content-center mb-5">
        <?php $image = get_field("headchef") ?> 
        <img src="<?php echo $image["url"]?>" alt="<?php echo $image["alt"] ?>" class="img-fluid rounded about_img">
    </div>
</section>

<div class="text-right">
<h1 class="text-danger ">
    <?php the_field("skybar")?>
    </h1>
    <hr class="bg-danger">
</div>
<section class="container aboutUS d-flex flex-column flex-md-row justify-content-between  mx-auto ">

  <div class=" col-xs-12 col-md-6  pt-5">
    <?php $image = get_field("about_skybar") ?> 
    <img src="<?php echo $image["url"] ?>" alt="<?php echo $image["alt"] ?>" class="img-fluid rounded about_img">
</div>
<div class=" text-right col-xs-12 col-md-6 pt-5">
    
    <h3 class="text-left text-danger">
    <?php the_field("skybar_headline")?>
    </h3>
    <p class="text-left">
    <?php the_field("skybar_subtext")?>
    </p>
    <p class="text-left">
    <?php the_field("skybar_subtext2")?>
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


.Hometitle{
color: rgba(233, 72, 78, 1);;

}



.aboutUS{
    background-color: #FFFDEE;
 
}


    </style>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>