<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3865681f3e97eb1deb40da6d1a8b43df5d95f52de9"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/themes/custom-theme/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/plugins/wpide/backups/themes/custom-theme/header_2022-04-20-08.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?> <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />-->
<title><?php bloginfo( 'title' ); ?></title>
<?php wp_head();?>

<link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        
</head>
<?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyrite'];
$size = 344;
$options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
$att_img = wp_get_attachment_image($logo, array($size, $size), false);
$logoSrc = wp_get_attachment_url($logo);
$att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
?>

<style>
.ml2 , .ml3, .ml4 {
  font-weight: 900;
  font-size: 3.5em;
}

.ml2 .letter , .ml3 .letter, .ml4 .letter {
  display: inline-block;
  line-height: 1em;
}
</style>

<body <?php body_class(); ?>>

<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-down" data-aos-duration="3000">
                    <div class="logo">
                        <a href="<?php echo site_url(); ?>"><img src="<?php echo $logoSrc; ?>" alt="" class="img-fluid"></a>
                    </div>
                </div>

                <div class="col-lg-8" data-aos="fade-down" data-aos-duration="3000">
                    <div class="logo">
                    <?php wp_nav_menu( array('menu'=> 'Header Menu','theme_location' => 'header_menu','fallback_cb'=> false, 'menu_class' => 'main-nav', 'container' => false ) ); ?>

                    
                        <!--<div class="main-nav">
                            <ul>
                                <li><a href="<?php echo site_url(); ?>">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li class="dropdown"><a href="javascript:;" class="dropbtn">Services</a>
                                <div class="dropdown-content">
                                        <a href="#">Business Registration</a>
                                        <a href="#">Improve Personal Credit</a>
                                        <a href="#">Improve Business Credit</a>
                                        <a href="#">Assistance with Business Credit</a>
                                        <a href="#">Assistance with Obtaining Personal/Business Grants</a>
                                        <a href="#">Monthly Bookkeeping Services</a>
                                      </div>
                                      </li>
                                <li><a href="faq.php">FAQs</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#" class="t-btn white-btn">Get Started</a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </header>
    
 <?php if(Is_home()|| is_front_page() ) { ?>



<?php } else if(is_single()) { ?>

<div class="inner-title" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/inner-title.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h1>Thanks for selecting Business Manager</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  <?php } else if(is_page(134)) { ?>  
  
  <div class="inner-title" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h1 class="service-heading"><?php echo the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } else { ?>

 
    
    <div class="inner-title" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h1><?php echo the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>  