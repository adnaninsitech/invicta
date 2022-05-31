<?php /* Template Name: Services Template */ ?>

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


<!--<section class="home-sec-2">
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
    </section>-->

<?php get_footer(); ?>