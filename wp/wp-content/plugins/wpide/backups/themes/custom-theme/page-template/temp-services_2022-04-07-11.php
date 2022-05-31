<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3865681f3e97eb1deb40da6d1a8b43dfffe9054143"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/themes/custom-theme/page-template/temp-services.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/plugins/wpide/backups/themes/custom-theme/page-template/temp-services_2022-04-07-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php /* Template Name: Services Template */ ?>

<?php get_header(); 

$section1 = get_field('section_1');
$section2 = get_field('section_2');




?>


<section class="services-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="text">
                        <h2><?php echo $section1['heading']; ?></h2>
                        <span class="line"></span>
                        <?php echo $section1['content']; ?>
                        <a href=" <?php echo $section1['link']; ?>" class="t-btn blue-btn">Contact Us for More Details</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="img-box">
                        <img src=" <?php echo $section1['image']; ?>" alt="" class="img-fluid">
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
                        <strong><?php echo $section2['title']; ?></strong>
                        <h2><?php echo $section2['heading']; ?></h2>
                        <span class="line"></span>
                        <?php echo $section2['content']; ?>
                        <p></p>
                        <a href="<?php echo $section2['link']; ?>" class="t-btn white-btn">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>