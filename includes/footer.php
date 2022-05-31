<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="footer-logo">
                        <a href="index.php"><img src="assets/images/footer-logo.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="box">
                        <h4>Quick Links</h4>
                        <div class="links">
                            <a href="index.php">Home</a>
                            <a href="about.php">About</a>
                            <a href="">Services</a>
                            <a href="faq.php">FAQs</a>
                            <a href="contact.php">Contact</a>
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
                            <a href="3108747414"><img src="assets/images/cell.png" class="img-fluid" alt=""> 3108747414</a>
                            <a href="info@invictaconsulting.us"> <img src="assets/images/mail.png" class="img-fluid" alt="">info@invictaconsulting.us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-text">
                       <p> © 2022 <span>Invicta Consulting LLC</span>. All Rights Reserved. Made with Love by <a href="https://insitech.ae/" target="_blank">Insitech <img src="assets/images/insitech.png" alt=""></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
   


    <script src="assets/js/aos-animate.js"></script>
    <script src="assets/js/lib.js"></script>
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