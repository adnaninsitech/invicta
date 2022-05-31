<?php /* Template Name: About Template */ ?>

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