<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "3865681f3e97eb1deb40da6d1a8b43dfced695b9c0"){
                                        if ( file_put_contents ( "/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/themes/custom-theme/single-boost.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/creapkxk/insitechstaging.com/demo/invicta-consulting/wp/wp-content/plugins/wpide/backups/themes/custom-theme/single-boost_2022-04-11-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php /* Template Name: Boost Page
Template Post Type: boost*/
?>

<?php get_header(); ?>

<section class="boost-new-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business-boost/thank.png" alt="" class="img-fluid">
                        <h2>Thanks for selecting Business Manager</h2>
                    </div>
                    <div class="text">
                        <strong>Full control of your business's financing future</strong>
                        <p>Harness the power of your business's financial health with full, in-depth credit reports and scores from Dun & Bradstreet, Experian & Equifax so you can apply for financing confidently. Business Manager gives you full transparency into all the details lenders get, so you'll never be caught off-guard when accessing working capital for your business. Nav customers on this plan were approved for 37% more in business loans than free customers.</p>
                        <p>You're almost there! Your upgraded Nav account will have a host of new features.</p>
                    </div>
                    <ul>
                        <li>
                            <p>Full business credit reports & scores: Dun & Bradstreet® • Experian® • Equifax® </p>
                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="" class="img-fluid">
                         </li>

                         <li>
                            <p>Full personal credit reports & scores: Experian® • TransUnion®</p>
                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="" class="img-fluid">
                         </li>


                         <li>
                            <p>24/7 business & personal credit alerts</p>
                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="" class="img-fluid">
                         </li>

                         <li>
                            <p>MatchFactor-powered financing marketplace </p>
                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="" class="img-fluid">
                         </li>

                         <li>
                            <p>Cash flow alerts & insights</p>
                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="" class="img-fluid">
                         </li>

                         <li>
                            <p>1-on-1 Access to Credit & Lending Specialists </p>
                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="" class="img-fluid">
                         </li>

                         <li>
                            <p>Full-Service Identity Restoration with dedicated identity specialists </p>
                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="" class="img-fluid">
                         </li>

                         <li>
                            <p>$1M Identity Theft Protection </p>
                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="" class="img-fluid">
                         </li>

                         <li>
                            <p>Follow up to 5 businesses' credit reports</p>
                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="" class="img-fluid">
                         </li>

                         <li>
                            <p>Quarterly billing option</p>
                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="" class="img-fluid">
                         </li>
                         <li>
                            <p>NEW! Lost Wallet Replacement</p>
                            <img src="https://insitechstaging.com/demo/invicta-consulting/wp/wp-content/uploads/2022/04/check-1.jpg" alt="" class="img-fluid">
                         </li>

                    </ul>

                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <select name="amount" onchange="getval(this);">
                                    
                                            <option value="<?php echo the_field('monthly_price'); ?>">$<?php echo the_field('monthly_price'); ?>/Monthly</option>
                                            <option value="<?php echo the_field('quaterly_price'); ?>">$<?php echo the_field('quaterly_price'); ?>/Quartelry</option>

                                     </select>
                                </div>
                                <!--<div class="col-md-6">
                                   <div class="price">
                                        <input type="radio" placeholder="" name="pck">
                                        <label for="">Quarterly <br> <span><strong><?php wpautop(the_field('quaterly_price')); ?></strong>/month</span> </label>
                                        
                                   </div>
                                </div>-->
                               <div class="col-md-12">
                               <p>*Discount applies only to the first quarter.</p>
                                <h2>Payment information</h2>
                               </div>
                                
                                <div class="col-md-6">
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Last Name">
                                </div>
                                <div class="col-md-12">
                                    <input type="tel" placeholder="Card number">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" placeholder="Enter a Location">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" placeholder="City">
                                </div>

                                <div class="col-md-6">
                                    <select name="" id="">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" placeholder="Zip">
                                </div>

                                <div class="col-md-12">
                                    <input type="tel" placeholder="Phone Number">
                                </div>

                                <div class="col-md-12">
                                    <input type="tel" placeholder="Coupen Code">
                                    <p>Activate a Nav Business Manager subscription and pay $29.99 for your first month plus any applicable sales tax. Applicable sales tax will automatically be calculated and added for states that require it. Service will automatically renew every month thereafter, on the same calendar date. You will be charged according to your chosen payment method at then-current rates. You may cancel your paid subscription at any time in your account settings or by contacting Customer Support at 1-855-226-8388. See our Terms & Conditions for complete terms. All fees and terms subject to change.</p>
                                    <button class="t-btn blue-btn">Upgrade Plan</button>
                                </div>
                            </div>
        
                    
                    
                       <input type='hidden' value="test@gmail.com" name='business'value='PayPal Business Email'> 
            <input type='hidden'name='item_name' value='<?php echo the_field('title'); ?>'> 
              <input type='hidden'name='item_number' value='CAM#N1'> 
              <input type='hidden' name='amount' id="famount" value='<?php echo the_field('monthly_price'); ?>'> 
              <input type='hidden' name='no_shipping' value='1'> 
              <input type='hidden'name='currency_code' value='USD'> 
              <input type='hidden'name='notify_url' value='http://sitename/paypal-payment-gateway-integration-in-php/notify.php'>
            <input type='hidden' name='cancel_return'value='https://insitechstaging.com/demo/invicta-consulting/wp/cancel/'>
            <input type='hidden' name='return'value='http://webtestdemos.com/azcpr-certifications-we-llc/return/?fname=<?php echo $name; ?>&lname=<?php echo $lname ?>&address=<?php echo $address ?>&city=<?php echo $city ?>&state=<?php echo $state?>&zip=<?php echo $zip?>&tele=<?php echo $tele ?>&email =<?php echo $email ?> &current=<?php echo $current?>&date=<?php echo $date?>&days=<?php echo $days?>&time=<?php echo $time?>&months=<?php echo $months?>'>
            <input type="hidden" name="cmd" value="_xclick">
            
            <input type="hidden" value="" id="hidField">
            
            
            
            </form>
                </div>
            </div>
        </div>
    </section>
<script>
function getval(sel)
{
    alert(sel.value);
}
</script>


<?php get_footer(); ?>