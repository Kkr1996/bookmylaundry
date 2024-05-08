<?php
/**
 * Template Name:Home
 */
 get_header();
 
?>

<section class="home-banner-section">
    <div class="fluid_container">
        <div class="banner-slider">
            <div>
           <!-- // http://localhost/bookmylaundry/wp-content/uploads/2024/05/03.jpg -->
                <div class="bg-image" style="background-image:url('<?php echo site_url();?>/wp-content/uploads/2024/05/03.jpg')">
                       <div class="inner_content">
                            <!-- <h3> Experience the Freshness of Dry-Cleaned Perfection.</h3> -->
                            <h3>Laundry &amp; dry cleaning with 24h delivery 
                                <span id="changingword"> New Delhi </span>
                            </h3>

                     
                            <h4>
                                World class<strong> DRY CLEAN</strong>
                                &amp; <strong>LAUNDRY</strong> service,
                                <strong>NOW IN INDIA</strong>
                            </h4>

                            <div class="wrap-container">
                                <p>World Renowned Machines German Eco Friendly Cleaning Solutions</p>
                            </div>
                            <div class="sitBtn-wrap">
                                <p><strong>Upto 10% OFF On First Order</strong></p> 
                                <a class="site_button">
                                    <span class="text">Schedule your pickup</span>
                                </a>
                            </div>
                       </div>
                </div>
            </div>
            <div>
                <div class="bg-image" style="background-image:url('<?php echo site_url();?>/wp-content/uploads/2024/05/01.png')">
                   
                    <div class="inner_content">
                         <h3> Elevate Your Wardrobe with Impeccable Dry-Cleaning Services.</h3>
                         <h3>Laundry & dry cleaning with 24h delivery</h3>
                    </div>
                </div>
            </div>
            
            <div>
                <div class="bg-image" style="background-image:url('<?php echo site_url();?>/wp-content/uploads/2024/05/02.png')">
                   
                    <div class="inner_content">
                         <h3> Elevate Your Wardrobe with Impeccable Dry-Cleaning Services.</h3>
                         <h3>Laundry & dry cleaning with 24h delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="searchsection">
    <div class="site_container">
        <div class="timeslot-picker">
            <div class="heading">
                <span class="schedule-next">Schedule your collection in</span>
                <span class="city">New delhi</span>
                <span class="change-city">
                    <span class="clickable">Change</span>
                </span>
            </div>
            <div class="timeslot-city-switcher">
                <div class="timeslot-city-switcher--list">
                    <a href="/noida">
                        <div class="timeslot-city-switcher--city" data-id="7">Dwarak Mor</div>
                        <div class="timeslot-city-switcher--city" data-id="8">Greater Noida</div>
                        <div class="timeslot-city-switcher--city" data-id="8">Gurgaon</div>
                        <div class="timeslot-city-switcher--city" data-id="7">Dwarak Mor</div>
                        <div class="timeslot-city-switcher--city" data-id="8">Greater Noida</div>
                        <div class="timeslot-city-switcher--city" data-id="8">Gurgaon</div>
                    </a>
                </div>
            </div>
            <div class="timeslot-picker--content">
                <div class="slots timeslot-picker--timeslots" data-city-id="" data-com-country="">
                    <a href="#">
                        <div class="slot">
                            <div class="slot--content">
                                <div class="slot--header">
                                    EARLIEST <span class="dashicons dashicons-arrow-right-alt2"></span>
                                </div>
                                <div class="slot--timeslot">in the next 45min</div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="slot">
                            <div class="slot--content">
                                <div class="slot--header">
                                    LAST <span class="dashicons dashicons-arrow-right-alt2"></span>
                                </div>
                                <div class="slot--timeslot">20:00 - 22:00</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <form id="search-form">
                <div class="timeslot-picker--fallback"><span>Schedule your pickup</span></div>
                <div class="wrap-form">
                    <input type="text" id="search-input" placeholder="Near Laundry Shop To You">
                    <button type="submit" id="search-button">Search</button>
                </div>
            </form>
        </div>
    </div>
</section>

<div class="landing-benefits--wrapper pt-80 pb-88 pb-md-120 pt-md-128">
   <div class="container">
      <div class="row text-center justify-content-center mb-64 mb-md-40">
         <div class="col-12 col-md-8">
            <h2 class="main-heading" id="landingBenefitsTitle">We collect, clean, and deliver your laundry and dry cleaning.</h2>
         </div>
      </div>
      <div class="row justify-content-center text-center mb-80 mb-md-120">
         <div class="col-12 col-md-10 offset-md-1 d-flex flex-column align-items-center">
            <div class="landing-key-items-wrapper">
               <div class="key-item me-md-24">
                  <img height="48" width="48" class="me-16" loading="lazy" alt="24" src="https://prod-cdn.laundryheap.com/assets/landing/icons/24-3435ffaf292eb948ff83ca5e64dabec878e0c27316dec67b632cbf492e34f97e.svg">
                  <div class="fw-bold" id="landingBenefitsTurnaround">24h turnaround time</div>
               </div>
               <div class="key-item me-md-24">
                  <img height="48" width="48" class="me-16" loading="lazy" alt="Truck" src="https://prod-cdn.laundryheap.com/assets/landing/icons/truck-714a3cd6450430a204a46d86196df6dd97b711709c9852df248c930c52ebfe49.svg">
                  <div class="fw-bold" id="landingBenefitsCollection">Free collection and delivery</div>
               </div>
               <div class="key-item">
                  <img height="48" width="48" class="me-16" loading="lazy" alt="Chat" src="https://prod-cdn.laundryheap.com/assets/landing/icons/chat-ecb700cb9b10e2d9668526900e47d154e28ef3b6a82dd4b0989b86cf1167ad76.svg">
                  <div class="fw-bold" id="landingBenefitsSupport">Dedicated 24/7 support</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<section class="custom_category">
    <div class="site_container">
        <h3 class="site-heading">Our Work</h3>
        <div class="wrap_category">

            <div class="item">
                <a href="#">
                    <div class="icons">
                        <img src="<?php echo get_template_directory_uri();?>/assets/icons/wash.png" alt="icons" class="icons">
                    </div>
                    <div class="heading">
                        <h4>Wash</h4>
                        <p>For everyday laundry, bedsheets and towels.</p>
                        <div class="price-service-card--tags">
                            <span>WASH</span>  + <span>TUMBLE-DRY</span>  + <span>IN A BAG</span> 
                        </div>

                        <div class="price">
                            <label>Price</label>
                             <p> RS 70/KG</p>
                        </div>

                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="icons">
                    <img src="<?php echo get_template_directory_uri();?>/assets/icons/WASHANIRONS.jpg" alt="icons" class="icons">
                    </div>
                    <div class="heading"> 
                        <h4>Wash and Iron</h4>
                        <p>For everyday laundry that requires ironing.</p>
                        <div class="price-service-card--tags">
                            <span>WASH</span>  + <span>TUMBLE-DRY</span>  + <span>IRONING</span>  + <span>ON HANGERS</span> 
                        </div>
                        <div class="price">
                            <label>Price</label>
                             <p> RS 100/KG</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="icons">
                        <img src="<?php echo get_template_directory_uri();?>/assets/icons/DRYCLEANING.jpg" alt="icons" class="icons">
                    </div>
                    <div class="heading">
                        <h4>Dry Cleaning</h4>
                        <p>For delicate items and fabrics.</p>
                        <div class="price-service-card--tags">
                            <span>DRY CLEANING</span>  + <span>IRONING</span>  + <span>ON HANGERS</span>
                        </div>
               
                        <div class="price">
                            <label>Price Per Item</label>
                             <p> RS 250</p>
                        </div>
                    </div>
                    
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="icons">
                         <img src="<?php echo get_template_directory_uri();?>/assets/icons/dvout.jpg" alt="icons" class="icons">
                    </div>
                    <div class="heading">
                        <h4>Duvets & Bulky Items</h4>
                        <p>For larger items that require extra care.</p>
                        <div class="price-service-card--tags">
                            <span>CUSTOM CLEANING</span>
                        </div>
                        <div class="price">
                            <label>Price Per Item</label>
                             <p>from Rs. 10</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="testimonial-slider">
    <div class="site_container">
         <div class="slider_content">

         <div class="left">
                    <div class="inner-wrap">
                        <div class="icons">
                             <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/bxs--quote-right.svg" alt="icons">
                        </div>
                        <h2>What our customers say</h2>
                    </div>
                    <div class="custom-arrow">
                        <div class="left-arrow"><img class="slick-prev" src="<?php echo get_template_directory_uri();?>/assets/icons/arrow-sm-left.svg" alt="Previous"></div>
                        <div class="right-arrow"><img class="slick-prev" src="<?php echo get_template_directory_uri();?>/assets/icons/arrow-right.svg" alt="Previous"></div>
                    </div>
              </div>


              <div class="right">
                <div class="inner-item testimonial_slider">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="https://codingyaar.com/wp-content/uploads/headshot-1-scaled.jpg" class="d-block w-100" alt="..."> 
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title 1</h5>
                            <?php 
                                for($i = 0 ; $i < 5; $i++){
                                    echo '<span class="dashicons dashicons-star-filled"></span>';
                                }
                            ?>
                            <p class="card-text">
                                Great laundry, great service, amazing staff, clean facilities and good location, they are very professional. highly recommended 
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="https://codingyaar.com/wp-content/uploads/headshot-2-scaled.jpg" class="d-block w-100" alt="..."> 
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title 1</h5>
                            <?php 
                                for($i = 0 ; $i < 5; $i++){
                                    echo '<span class="dashicons dashicons-star-filled"></span>';
                                }
                            ?>
                            <p class="card-text">
                                I recently used BookMyLaundry for the first time, and I’m thoroughly impressed with their service. The booking process was quick and easy, and the pickup and delivery were punctual. My clothes came back fresh, clean, and neatly folded. The entire experience was hassle-free, and I appreciate the convenience they offer. I highly recommend BookMyLaundry for their efficiency, reliability, and quality service.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="https://codingyaar.com/wp-content/uploads/headshot-1-scaled.jpg" class="d-block w-100" alt="..."> 
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title 1</h5>
                            <?php 
                                for($i = 0 ; $i < 5; $i++){
                                    echo '<span class="dashicons dashicons-star-filled"></span>';
                                }
                            ?>
                            <p class="card-text">
                                Great laundry, great service, amazing staff, clean facilities and good location, they are very professional. highly recommended 
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="https://codingyaar.com/wp-content/uploads/headshot-2-scaled.jpg" class="d-block w-100" alt="..."> 
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Card title 1</h5>
                            <?php 
                                for($i = 0 ; $i < 5; $i++){
                                    echo '<span class="dashicons dashicons-star-filled"></span>';
                                }
                            ?>
                            <p class="card-text">
                                I recently used BookMyLaundry for the first time, and I’m thoroughly impressed with their service. The booking process was quick and easy, and the pickup and delivery were punctual. My clothes came back fresh, clean, and neatly folded. The entire experience was hassle-free, and I appreciate the convenience they offer. I highly recommend BookMyLaundry for their efficiency, reliability, and quality service.
                            </p>
                        </div>
                    </div>
                </div>
              </div>

         </div>
    </div>
</section>

<section class="happy customer">
    <div class="py-32 py-md-48 text-center dark-blue bg-primary-yellow">
        <div class="container">
            <div class="row mb-16 justify-content-center">
                <div class="col-auto">
                    <p class="title fw-bold font-24-32 text-center fw-normal" id="landingUpsellSmallTitle">Book now. Smile away. Everyday.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <span id="landingUpsellSmallCTA">Schedule your pickup</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ourareas">
    <div class="site_container">
        <div class="inner_content">
            <div class="left">
                 <h3>Our Stores</h3>
                 <h2>Which is best for you?</h2>
            </div>
            <div class="right">
                <p>At Book My Laundry, we are not just another laundry and dry cleaning service; we are pioneers in reinventing the future of garment care.</p>
            </div>
        </div>   
        <div class="locations">
            <div class="w-html">
                <ul style="margin: 0; color:#fff;">
                    <li> 
                       <a href="#">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons"> <span> Noida Sector 29 </span>
                       </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons"> <span> Noida Sector 76 </span>
                       </a>
                    </li>
                    <li>
                      <a href="#">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons"> <span> Alpha 2 Gr. Noida</span>
                       </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons"> <span> Noida Sector 104</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons"> <span> Dwarka</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons"> <span> Vyapar Kendra Gurgaon</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons"> <span> Ludhiana Trade Tower Ludhiana </span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons"> <span> Chander nagar Ghaziabad </span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>               
    </div>
</section>

<section class="our-blog">
    <div class="site_container">
       <div class="head">
            <h3>Latest Blogs</h3>
            <p>Stay updated with the best of garment and home cleaning</p>
       </div> 
       <div class="bloglist">
            <div class="item">
                <div class="content">
                   <a href="#">
                        <div class="wrap-image">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/image/blog-01.jpg" alt="">
                        </div>
                        <div class="content">
                            <time datetime="August 21, 2023"><i class="houzez-icon icon-calendar-3 mr-1"></i> August 21, 2023</time>
                            <h3>Mastering Laundry Care:  Tips and Tricks for a Fresher Wardrobe </h3>
                        </div>
                   </a>
                </div>
            </div>
            <div class="item">
               <a href="#">
                <div class="content">
                        <div class="wrap-image">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/image/blog-01.jpg" alt="">
                        </div>
                        <div class="content">
                            <time datetime="August 21, 2023"><i class="houzez-icon icon-calendar-3 mr-1"></i> August 21, 2023</time>
                            <h3>Mastering Laundry Care:  Tips and Tricks for a Fresher Wardrobe </h3>
                        </div>
                    </div>
               </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="content">
                        <div class="wrap-image">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/image/blog-01.jpg" alt="">
                        </div>
                        <div class="content">
                            <time datetime="August 21, 2023"><i class="houzez-icon icon-calendar-3 mr-1"></i> August 21, 2023</time>
                            <h3>Mastering Laundry Care:  Tips and Tricks for a Fresher Wardrobe </h3>
                        </div>
                    </div>
                </a>
            </div>
       </div>
    </div>
</section>

<?php
get_footer();
