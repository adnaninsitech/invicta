<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3865681f3e97eb1deb40da6d1a8b43df5b5fa2cecd"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/themes/custom-theme/page-template/home.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/plugins/wpide/backups/themes/custom-theme/page-template/home_2022-04-06-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php /* Template Name: Home Template */ ?>

<?php get_header(); ?>

<section class="home-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="text">
                        <h1>We Provide Solution To Grow Business</h1>
                        <p>Invicta Consulting LLC started with one dream: to help individuals and businesses achieve financial freedom and security.</p>
                        <a href="" class="t-btn white-btn">Our Services</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/banner1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-sec-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="text">
                        <strong>ABout Us</strong>
                        <h2>Who We Are</h2>
                        <span class="line"></span>
                        <p>Invicta Consulting LLC started with one dream: to help individuals and businesses achieve financial freedom and security. This passion has driven the company to new heights – improving the lives of all our registered clients for the better.</p>
                        <p>This, we have achieved by providing specialized services in the shortest time possible for both individuals and businesses.</p>
                        <a href="" class="t-btn blue-btn">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="img-box">
                        <h2>Our Mission Statement</h2>
                        <span class="line"></span>
                        <p>Invicta Consulting LLC started with one dream: to help individuals and businesses achieve financial freedom and security.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-sec-2">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-7">
                    <div class="text">
                        <strong>Our Dedication</strong>
                        <h2>Why Invicta Consulting LLC?</h2>
                        <span class="line"></span>
                        <p>Invicta Consulting LLC was launched as an alternative to the consulting industry. We know the industry is flooded with bad actors offering vain promises to individuals, businesses, and financial solutions.  </p>
                        <a href="" class="t-btn white-btn">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-sec-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="heading">
                        <span>Invicta Consulting LLC</span>
                        <h2>What We Offer</h2>
                        <p>Invicta Consulting LLC provides expert services in the following areas:</p>
                    </div>
                </div>
            </div>
            <div class="row offer-slider">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sec-3-a.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <h2>Business Registration</h2>
                            <p>Looking to register your startup? We will guide you through the entire process of registering </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sec-3-d.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <h2>Improve Personal Credit</h2>
                            <p>Looking to register your startup? We will guide you through the entire process of registering </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sec-3-e.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <h2>Improve Business Credit</h2>
                            <p>Looking to register your startup? We will guide you through the entire process of registering </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sec-3-b.jpg" alt="" class="img-fluid">
                        <div class="text">
                            <h2>Improve Personal Credit</h2>
                            <p>Looking to register your startup? We will guide you through the entire process of registering </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="btm-btn">
                        <a href="" class="t-btn blue-btn">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-sec-4">
        <div class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <h2>Contact Us</h2>
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <input type="text" name="" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <input type="text" name="" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <input type="email" name="" placeholder="Email Address">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <input type="tel" name="" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <textarea name="" id="" cols="30" rows="10" placeholder="Tell us Something"></textarea>
                                        <input type="submit" value="SUBMIT" class="t-btn blue-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
        
    </section>

<?php get_footer(); ?>