 <?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyright']
 ?>


        
<?php wp_footer(); ?>

<footer >
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="footer-logo">
                        <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="box">
                        <h4>Quick Links</h4>
                         <?php wp_nav_menu( array('menu'=> 'Quick Link','theme_location' => 'quick_link','fallback_cb'=> false, 'menu_class' => 'links', 'container' => false ) ); ?>

                        
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="box">
                        <h4>Company</h4>
                        
                        <?php wp_nav_menu( array('menu'=> 'Links','theme_location' => 'links','fallback_cb'=> false, 'menu_class' => 'links', 'container' => false ) ); ?>

                        
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="box">
                        <h4>Contact Us</h4>
                        <div class="links contact">
                            <a href="tel:<?php echo $options['Address']; ?>" class="fa fa-map-marker"><?php echo $options['Address']; ?> </a>
                            <a href="tel:<?php echo $options['phone_number']; ?>" class="fa fa-phone"><?php echo $options['phone_number']; ?> </a>
                            <a href="tel:<?php echo $options['fax']; ?>" class="fa fa-fax"><?php echo $options['fax']; ?> </a>
                            <a href="mailto:<?php echo $options['email']; ?>" class="fa fa-envelope"> <?php echo $options['email']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-text">
                    
                  
                       <p> <?php echo $options['copyright']; ?> <a href="https://insitech.ae/" target="_blank">Insitech <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insitech.png" alt=""></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/inview.js"></script>

    <script>
    
$('.ml2').on('inview', function (event, visible) {
  if (visible == true) {
  
       var textWrapper = document.querySelector('.ml2');
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
            
            anime.timeline({loop: false})
              .add({
                targets: '.ml2 .letter',
                scale: [4,1],
                opacity: [0,1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 950,
                delay: (el, i) => 70*i
              }).add({
                targets: '.ml2',
                opacity: 1,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
              });
              
            
              setTimeout( function(){ $(".home-sec-1 .text h2").removeClass("ml2"); }, 3000 );
  } 
});


$('.ml3').on('inview', function (event, visible) {
  if (visible == true) {
  
       var textWrapper = document.querySelector('.ml3');
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
            
            anime.timeline({loop: false})
              .add({
                targets: '.ml3 .letter',
                scale: [4,1],
                opacity: [0,1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 950,
                delay: (el, i) => 70*i
              }).add({
                targets: '.ml3',
                opacity: 1,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
              });
              
               setTimeout( function(){ $(".home-sec-2 .text h2").removeClass("ml3"); }, 3000 );
              
              
  } 
});


$('.ml5').on('inview', function (event, visible) {
  if (visible == true) {
  
       var textWrapper = document.querySelector('.ml5');
            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
            
            anime.timeline({loop: false})
              .add({
                targets: '.ml5 .letter',
                scale: [4,1],
                opacity: [0,1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 950,
                delay: (el, i) => 70*i
              }).add({
                targets: '.ml5',
                opacity: 1,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
              });
              
               setTimeout( function(){ $(".home-sec-3 .heading h2").removeClass("ml5"); }, 3000 );
              
              
  } 
});


        AOS.init({
            duration: 1200,
        });
        

        $(document).on('ready', function () {
            $(".offer-slider").slick({
                dots: false,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: '<button class="slide-arrow prev-arrow"> <img src="assets/images/home/left-arrow.png" alt=""></button>',
                nextArrow: '<button class="slide-arrow next-arrow"> <img src="assets/images/home/right-arrow.png" alt=""></button>'
            });
            
        
        
        // Wrap every letter in a span
   /*     var textWrapper = document.querySelector('.ml10 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        
        anime.timeline({loop: true})
          .add({
            targets: '.ml10 .letter',
            rotateY: [-90, 0],
            duration: 1300,
            delay: (el, i) => 45 * i
          }).add({
            targets: '.ml10',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
          });
          
          
        });
        */
    
    


/*    var textWrapper = document.querySelector('.ml5');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: false})
  .add({
    targets: '.ml5 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml5',
    opacity: 1,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });*/
        
        });
    </script>
</body>
</html>