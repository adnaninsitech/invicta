<?php /* Template Name: Boost Template */ ?>

<?php get_header(); ?>

       
       <section class="boost-sec-1">
        <div class="container">
            <div class="row">
            
                <div class="col-md-12">
                    <div class="tp-text">
                       <?php echo the_content(); ?>
                    </div>


                   



                    <div class="top-btn-box">
                        <div class="img-box">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/05/05-6.png" alt="" class="img-fluid">
                        </div>

                        <ul class="nav nav-tabs btn-box" role="tablist">
                            <li role="presentation" class="active btn-1"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Month</a></li>
                            <li role="presentation" class="btn-2"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Quarter</a>
                            <span>Save up to 20%*</span>
                        </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="tab-content">
                    
                        <div class="boost-table tab-pane active" id="home" role="tabpanel">
                            <table>
                                <tbody>
                                
                                
                                    <tr>
                                        <td width="25%"></td>
                                         <?php $count=0; $index_query = new WP_Query(array( 'post_type' => 'boost' , 'order' => 'asc')); ?>
                                           <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
                                           
                                           
                                         <td width="25%"> 
                                            <strong><?php echo the_title(); ?></strong>
                                            <span class="amount">$ <?php echo the_field('monthly_price'); ?> / month</span> 
                                            <?php echo the_field('price_text'); ?>
                                            <span class="detail"><a href="">More details</a></span> 
                                            <span class="select"><a href="<?php echo the_permalink(); ?>">Select</a></span> 
                                        </td>
                                        <?php $count++; endwhile; wp_reset_query();  ?>

                                      
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>
                        </div>

                        <div class="boost-table tab-pane" id="profile" role="tabpanel">
                            <table>
                                <tbody>
                                    <tr>
                                        <td width="25%"></td>
                                        <?php $count=0; $index_query = new WP_Query(array( 'post_type' => 'boost' , 'order' => 'asc')); ?>
                                           <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
                                           
                                           
                                         <td width="25%"> 
                                            <strong><?php echo the_title(); ?></strong>
                                            <span class="amount">$ <?php echo the_field('quaterly_price'); ?> / quaterly</span> 
                                            <?php echo the_field('price_text'); ?>
                                            <span class="detail"><a href="">More details</a></span> 
                                            <span class="select"><a href="<?php echo the_permalink(); ?>">Select</a></span> 
                                        </td>
                                        <?php $count++; endwhile; wp_reset_query(); ?>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                
                
                <div class="col-md-12">
                
                    <div class="tp-text">
                    
                       <?php echo the_field('content'); ?>
                    </div>


                </div>

            </div>
        </div>
    </section>      


<?php get_footer(); ?>