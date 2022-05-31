<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>


<section class="contact-top-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div>
                        
                        <?php echo the_content(); ?>
                        
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-sec-4 contact-page">
        <div class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <h3><span>Schedule </span> your meeting with invicta advisor to <span>get started.</span></h3>
                            <?php echo do_shortcode('[contact-form-7 id="57" title="Contact form 1"]'); ?>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
        
    </section>


<?php get_footer(); ?>