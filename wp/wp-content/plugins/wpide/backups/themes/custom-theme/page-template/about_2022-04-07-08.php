<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3865681f3e97eb1deb40da6d1a8b43dfffe9054143"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/themes/custom-theme/page-template/about.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/plugins/wpide/backups/themes/custom-theme/page-template/about_2022-04-07-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php /* Template Name: About Template */ ?>

<?php get_header(); 

$section1 = get_field('section_1'); 
$vision = get_field('our_vision'); 
$section2 = get_field('section_2'); 

?>

 <section class="home-sec-1 about-sec-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="text">
                        <!-- <strong>ABout Us</strong> -->
                        <h2><?php echo $section1['left_heading']; ?></h2>
                        <span class="line"></span>
                        <?php echo $section1['left_content']; ?>
                       </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="img-box">
                        <h2><?php echo $section1['right_heading']; ?></h2>
                        <span class="line"></span>
                        <?php echo $section1['right_content']; ?>
                       </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="home-sec-1 about-sec-2 about-sec-1 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text">
                        <!-- <strong>ABout Us</strong> -->
                        <h2>Our Vision</h2>
                        <span class="line"></span>
                        <div class="prg">
                        <?php echo the_field('our_vision');  ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <section class="about-sec-3" style="background-image:url('<?php echo $section2['image']; ?>');">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-10">
                    <div class="text">
                    <?php echo $section2['content']; ?>
                         <a href="<?php echo $section2['link']; ?>" class="t-btn white-btn">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php get_footer(); ?>