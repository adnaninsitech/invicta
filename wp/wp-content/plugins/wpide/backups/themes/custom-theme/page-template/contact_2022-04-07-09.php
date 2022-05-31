<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3865681f3e97eb1deb40da6d1a8b43dfffe9054143"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/themes/custom-theme/page-template/contact.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/plugins/wpide/backups/themes/custom-theme/page-template/contact_2022-04-07-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php /* Template Name: Contact Template */ ?>

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