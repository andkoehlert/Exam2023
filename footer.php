<footer class="pb-4">
   <div class="col-6 justify-center text-center block mx-auto pt-5">
<h2 class="reservation"><?php the_field("reservation")?></h2>   
</div>
   <div class="d-block d-md-flex mt-4">
     <div class="col text-center">
       <h3 class="footer-title"><?php the_field("address")?></h3>   

       <p class="mt-2 footer-text">
       Grådybet 73A, <br>
       17th floor, <br>
       6700 Esbjerg
       </p>
     </div>
     <div class="col text-center">
       <h3 class="footer-title"><?php the_field("opening_hours")?></h3>   
       <p class="mt-2 footer-text">
         Mon-Sat from 5:30 p.m <br>
         Brunch: Sat-Sun from <br>
         11:00 a.m until 3:00 p.m
       </p>
     </div>
     <div class="col text-center">
              <h3 class="footer-title"><?php the_field("contact")?></h3>   

       <p class="mt-2 footer-text">
        +45 53697050 <br>
       info@platesesbjerg.dk
       </p>
     </div>
   </div>








</footer>

<?php get_footer(); ?>

</body>
</html>