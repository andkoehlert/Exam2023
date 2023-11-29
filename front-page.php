<?php
$image = get_field("background");
$video = get_field("background_video");
$image2 = get_field("backgroundMobile");

?>



<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
   
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

    <!-- Content overlay this is the overlay that allows the image & video to work with ACF -->
    <div class="content-overlay">


    <nav class="navbar navbar-expand-lg" style="background-color: rgba(233, 72, 78, 0.3);">
    <div class="container">
        <ul class="navbar-nav d-flex flex-row justify-content-around w-100">
            <li class="nav-item">
                <a class="nav-link text-light h4" href="<?php echo get_permalink( get_page_by_path( 'home-esbjerg' ) ) ?>">Esbjerg</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light h4" href="#">Christianshavn</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light h4" href="#">Solrød</a>
            </li>
        </ul>
    </div>

    <ul class="languages"><?php pll_the_languages() ?></ul>
</nav>



<div class="centered-content justify-content-center flex-column d-flex  text-light " >
<a class="d-flex justify-content-center pb-2" href="<?php echo home_url(); ?>">
                    <img class="logo " src="<?php echo get_template_directory_uri() . '/assets/logo/Plates-Logo.png'; ?>" alt="Logo"
                    
                    
                    >
                </a>
<div style="background-color: rgba(233, 72, 78, 0.3);">
    <p class="d-flex justify-content-center pt-2">Restaurant & Cocktailbar</p
    
>
<h1 class="d-flex justify-content-center ">ESBJERG</h1>
</div>
>
</div> 


    </div>
    
</div>
<section class="Manifest " 

>
<header class=" page-title text-center gradient  pt-5" >
            <div 
            class="container d-flex justify-content-center flex-column" style="max-width: 700px;">
                <div>
                    <h3 class="Hometitle" ><?php the_field("homeTitle")?></h3
                    
                    
                    >
                    <article >
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>
        </article>                    
                </div>


            </div>
        </header>
    </section>
        <section class="aboutUS d-flex justify-content-center mx-auto ">
        <div class="p-2  ">
        <h1 class="frontpage_place_title d-flex justify-content-center pb-4 text-danger">Plates Esbjerg</h1>
        <?php $image = get_field("platesesbjerg") ?> 
    <img src="<?php echo $image["sizes"]["large"] ?>" alt="<?php echo $image["alt"] ?>" class="img-fluid">
</div>
  </div>
  <div class="p-2">
  <h1 class="frontpage_place_title d-flex justify-content-center pb-4 text-danger">Plates Christianshavn</h1>

  <?php $image = get_field("plateschristianshavn") ?> 
    <img src="<?php echo $image["sizes"]["large"]; ?>" alt="<?php echo $image["alt"]; ?>" class="img-fluid">
</div>

</section>

<?php get_footer(); ?>
</body>
</html>
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
            
            z-index: 1;
            
        }
        .logo {
    width: 20em;
    margin-right: 10px;
    position: relative;
    justify-content: start;
}
        .centered-content {
    position: absolute;
    top: 50%;
    left: -100%; /* Start outside the left side of the screen */
    opacity: 0; /* Initially set opacity to 0 */
    width: 100%;
    animation: moveInFromLeftAnimation 1s forwards; /* Animation to move from outside left to center with opacity transition */
  
}

.aboutUS{
    background-color: #FFFDEE;
}

ul.languages {
  list-style: none;
  
  display: flex;
}

ul.languages li {
  margin-right: 10px;
  margin-top: 10px;

}

ul.languages a {
  text-decoration: none;
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  color: #333;
}

ul.languages .current-lang a {
  font-weight: bold;
  color: #fff;
  background-color: #0073e6; 
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

.Manifest{
    height: 100vh;
    background-color: #FFFDEE;
}
@media (max-width: 768px) {
    .frontpage_place_title{
      font-size: small;
      }
}
footer {
  background-color: #FFFDEE;
  }
.reservation {
  color: #E9484E;
  padding: 10px;
  font-weight: 600;
  font-size: 20px;
  border-bottom: 3px solid #E9484E;
}
.footer-title {
  color: #E9484E;
  padding: 10px;
  font-weight: 600;
  font-size: 18px;
}
.info-box{
  width: 200px;
  height: auto;
}
.footer-text {
  font-size: 14px;
}

    </style>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>