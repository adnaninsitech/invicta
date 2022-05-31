<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3865681f3e97eb1deb40da6d1a8b43dfffe9054143"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/themes/custom-theme/page-template/home.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/plugins/wpide/backups/themes/custom-theme/page-template/home_2022-04-07-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php /* Template Name: Home Template */ ?>

<?php get_header(); 

$section1 = get_field('section_1'); 
$section2a = get_field('section_2a'); 
$section2b = get_field('section_2b'); 
$section3 = get_field('section_3'); 
?>

<section class="home-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="text">
                      <?php echo $section1['content']; ?>
                        
                        <a href="<?php echo $section1['link']; ?>" class="t-btn white-btn">Our Services</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="img-box">
                        <img src="<?php echo $section1['image']; ?>" alt="" class="img-fluid">
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
                     <?php echo $section2a['content']; ?>
                     <a href="<?php echo $section2a['link']; ?>" class="t-btn blue-btn">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="img-box">
                        <h2><?php echo $section2b['heading']; ?></h2>
                        <span class="line"></span>
                        <?php echo $section2b['content']; ?>
                         </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-sec-2" style="background-image:url('<?php echo $section3['image']; ?>'); ">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-7">
                    <div class="text">
                        <strong><?php echo $section3['title']; ?></strong>
                        <h2><?php echo $section3['heading']; ?></h2>
                        <span class="line"></span>
                        <?php echo $section3['content']; ?>
                        <a href="<?php echo $section3['link']; ?>" class="t-btn white-btn">Explore More</a>
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
            <?php  $index_query = new WP_Query(array( 'post_type' => 'offer', 'posts_per_page' => '-1' , 'order'=>'asc')); ?>
    <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>  
                <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="#">
                    <div class="box">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        <div class="text">
                            <h2><?php echo the_title(); ?></h2>
                            <?php echo the_content(); ?>
                        </div>
                    </div>
                    </a>
                </div>
<?php endwhile; wp_reset_query();  ?>
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="btm-btn">
                        <a href="<?php echo site_url(); ?>" class="t-btn blue-btn">View All</a>
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
                            <?php echo do_shortcode('[contact-form-7 id="57" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
        
    </section>

<?php get_footer(); ?>