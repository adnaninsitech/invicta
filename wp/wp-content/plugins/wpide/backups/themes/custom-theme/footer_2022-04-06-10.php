<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3865681f3e97eb1deb40da6d1a8b43df5b5fa2cecd"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/themes/custom-theme/footer.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/plugins/wpide/backups/themes/custom-theme/footer_2022-04-06-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?> <?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyright']
 ?>


        
<?php wp_footer(); ?>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="footer-logo">
                        <a href="index.php"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="box">
                        <h4>Quick Links</h4>
                        <div class="links">
                            <a href="<?php echo site_url(); ?>">Home</a>
                            <a href="#">About</a>
                            <a href="#">Services</a>
                            <a href="#">FAQs</a>
                            <a href="#">Contact</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="box">
                        <h4>Company</h4>
                        <div class="links">
                            <a href="">Terms & Condition</a>
                            <a href="">Privacy Policy</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="box">
                        <h4>Contact Us</h4>
                        <div class="links contact">
                            <a href="3108747414"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cell.png" class="img-fluid" alt=""> 3108747414</a>
                            <a href="info@invictaconsulting.us"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png" class="img-fluid" alt="">info@invictaconsulting.us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-text">
                       <p> © 2022 <span>Invicta Consulting LLC</span>. All Rights Reserved. Made with Love by <a href="https://insitech.ae/" target="_blank">Insitech <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insitech.png" alt=""></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script>

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
        });
    </script>
</body>
</html>