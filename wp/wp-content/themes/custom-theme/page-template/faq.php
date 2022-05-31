<?php /* Template Name: Faq Template */ ?>

<?php get_header(); ?>



<section class="faq-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text">
                        <?php echo the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="main">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-1 col-lg-10 col-md-12 col-sm-12">
                    <div class="accordion" id="faq">
                    <?php $x=1; if( have_rows('faq_rep') ): while( have_rows('faq_rep') ) : the_row(); ?>
                    
                    <div class="card">
                        <div class="card-header" id="faqhead<?php echo $x; ?>">
                            <a href="#" class="btn btn-header-link <?php if($x > 1){echo 'collapsed'; } else {echo ''; } ?>" data-toggle="collapse" data-target="#faq<?php echo $x; ?>" aria-expanded="true" aria-controls="faq<?php echo $x; ?>"><?php echo get_sub_field('question'); ?></a>
                        </div>

                        <div id="faq<?php echo $x; ?>" class="collapse <?php if($x==1){echo 'show'; } else {echo ''; } ?>" aria-labelledby="faqhead<?php echo $x; ?>" data-parent="#faq">
                            <div class="card-body">
                            <?php echo get_sub_field('answer'); ?>
                                <?php echo get_sub_field('question'); ?>
                            </div>
                        </div>
                    </div>
                    
                    <?php $x++; endwhile; endif; ?>
                </div>
                    </div>
                </div>
    </div>
  </div>
    </section>

<?php get_footer(); ?>