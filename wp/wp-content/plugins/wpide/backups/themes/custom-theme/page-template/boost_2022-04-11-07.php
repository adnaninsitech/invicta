<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3865681f3e97eb1deb40da6d1a8b43dfced695b9c0"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/themes/custom-theme/page-template/boost.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/plugins/wpide/backups/themes/custom-theme/page-template/boost_2022-04-11-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php /* Template Name: Boost Template */ ?>

<?php get_header(); ?>

<section class="boost-sec-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tp-text">
                        <p>Choose to pay monthly or quarterly. Cancel your plan at any time.</p>
                    </div>


                    <div>

  

</div>

 <?php $count=0; $index_query = new WP_Query(array( 'post_type' => 'boost')); ?>

            <div class="top-btn-box">
                        <div class="img-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-1.png" alt="" class="img-fluid">
                        </div>

                        <ul class="nav nav-tabs btn-box" role="tablist">
                        
                        <?php $count=0; $index_query = new WP_Query(array( 'post_type' => 'boost', 'order'=>'asc')); ?>
            <?php while ($index_query->have_posts()) : $index_query->the_post(); 
              if($count==0){ $class="activetab"; }else{ $class=""; } ?>
                          
                          <li role="presentation" class="<?php if($count==0) {echo 'active' ;} ?> btn-1"><a href="#tab-<?php echo get_the_id(); ?>" aria-controls="home" role="tab" data-toggle="tab"><?php the_title(); ?></a></li>
                       
                       
                           
                       <?php $count++; endwhile; wp_reset_query(); ?>
                   <span>Save up to 20%*</span>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="tab-content">
                    <?php $count=0; $index_query = new WP_Query(array( 'post_type' => 'boost')); ?>
                    
                        <div class="boost-table tab-pane <?php if($count==0) {echo 'active' ;} ?>" id="tabs-<?php echo get_the_id(); ?>" role="tabpanel">
                             <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
                            <table>
                                <tbody>
                                
                                    
            
                                    <tr>
                                        <td width="30%"></td>
                                        <?php $x=1; if( have_rows('items') ): while( have_rows('items') ) : the_row(); ?>
                                        <td width="15%"> 
                                            <strong><?php echo get_sub_field('title'); ?></strong>
                                            <span class="amount"><?php echo get_sub_field('price'); ?></span> 
                                            <span class="detail"><a href="<?php echo get_sub_field('link'); ?>">More details</a></span> 
                                            <?php if ($x==1) { ?> 
                                             <span class="current">Current plan </span> 
                                            
                                            <?php } else { ?> 
                                            
                                            <span class="select"><a href="">Select</a></span> 
                                            
                                            <?php } ?>
                                            
                                        </td>
                                        
                                        <?php $x++; endwhile; endif; ?>

                                     
                                    </tr>
                                    
                                 
                                    
                                    <tr>
                                        <td>
                                            Full business credit reports & scores: Dun & Bradstreet® • Experian® • Equifax®
                                        </td>
                                        <td>
                                            <strong>Summary Only</strong>
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Full business credit reports & scores: Dun & Bradstreet® • Experian® • Equifax®
                                        </td>
                                        <td>
                                            <strong>Experian Summary Only</strong>
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        24/7 business & personal credit alerts
                                        </td>
                                        <td>
                                        <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        MatchFactor-powered financing marketplace
                                        </td>
                                        <td>
                                        <img src="/check.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="/check.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        Cash flow alerts & insights
                                        </td>
                                        <td>
                                        <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        1-on-1 Access to Credit & Lending Specialists
                                        </td>
                                        <td>
                                        <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/imageshttps://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        Full-Service Identity Restoration with dedicated identity specialists
                                        </td>
                                        <td>
                                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/imageshttps://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt=""> -->
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        $1M Identity Theft Protection
                                        </td>
                                        <td>
                                        <!-- <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt=""> -->
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        Follow up to 5 businesses' credit reports
                                        </td>
                                        <td>
                                        <!-- <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt=""> -->
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        Quarterly billing option
                                        </td>
                                        <td>
                                        <!-- <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt=""> -->
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        NEW! <br> Lost Wallet Replacement
                                        </td>
                                        <td>
                                        <!-- <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt=""> -->
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        NEW! <br>Build business credit with tradeline reporting

                                        </td>
                                        <td>
                                        <!-- <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt=""> -->
                                        </td>
                                        <td>
                                            <!-- <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt=""> -->
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        FICO® Small Business Scoring Service℠ (SBSS) score: The score used to prescreen SBA loans

                                        </td>
                                        <td>
                                        <!-- <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt=""> -->
                                        </td>
                                        <td>
                                            <!-- <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt=""> -->
                                        </td>
                                        <td>
                                            <!-- <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt=""> -->
                                        </td>
                                        <td>
                                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="">
                                        </td>
                                    </tr>
                                    <tr >
                                        <td ></td>
                                        <td ><span class="current">Current plan</span></td>
                                        <td class="select"><a href="">Select</a></td>
                                        <td class="select"><a href="">Select</a></td>
                                        <td class="select"><a href="">Select</a></td>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>
                              <?php $x++; endwhile; wp_reset_query();?>
                        </div>
                      
                      

                       
                    </div>
                </div>
            </div>
        </div>
    </section>





<?php get_footer(); ?>