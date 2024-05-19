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
                <div class="video-container bg-image">
                    <video id="background-video" autoplay loop muted playsinline>
                        <source src="<?php echo site_url();?>/wp-content/uploads/2024/05/bannervideo_01.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="content inner_content">
                        <div class="banner-text">
                            <h3>Laundry &amp; dry cleaning with 24h delivery 
                                <span id="changingword"> New Delhi </span>
                            </h3>
                            <!-- <p>Professional laundry services for your convenience</p> -->

                            <div class="sitBtn-wrap">
                                <p><strong>Upto 10% OFF On First Order</strong></p> 
                                <a class="site_button">
                                    <span class="text">Schedule your pickup</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-image" style="background-image:url('<?php echo site_url();?>/wp-content/uploads/2024/05/03.jpg')">
                       <div class="inner_content">
                           <h3> Experience the Freshness of Dry-Cleaned Perfection.</h3>
                            <!-- <h3>Laundry &amp; dry cleaning with 24h delivery 
                                <span id="changingword"> New Delhi </span>
                            </h3> -->

                     
                            <!-- <h4>
                                World class<strong> DRY CLEAN</strong>
                                &amp; <strong>LAUNDRY</strong> service,
                                <strong>NOW IN INDIA</strong>
                            </h4> -->

                            <!-- <div class="wrap-container">
                                <p>World Renowned Machines German Eco Friendly Cleaning Solutions</p>
                            </div> -->
                            <!-- <div class="sitBtn-wrap">
                                <p><strong>Upto 10% OFF On First Order</strong></p> 
                                <a class="site_button">
                                    <span class="text">Schedule your pickup</span>
                                </a>
                            </div> -->
                       </div>
                </div>
            </div>
            <!-- <div>
                <div class="bg-image" style="background-image:url('<?php echo site_url();?>/wp-content/uploads/2024/05/01.png')">
                   
                    <div class="inner_content">
                         <h3> Elevate Your Wardrobe with Impeccable Dry-Cleaning Services.</h3>
                         <h3>Laundry & dry cleaning with 24h delivery</h3>
                    </div>
                </div>
            </div>
             -->
            <!-- <div>
                <div class="bg-image" style="background-image:url('<?php echo site_url();?>/wp-content/uploads/2024/05/02.png')">
                   
                    <div class="inner_content">
                         <h3> Elevate Your Wardrobe with Impeccable Dry-Cleaning Services.</h3>
                         <h3>Laundry & dry cleaning with 24h delivery</h3>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<section id="searchsection">
    <div class="site_container">
        <div class="timeslot-picker">
            <div class="heading">
                <span class="schedule-next">Schedule pickup</span>
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
            <form id="search-form">
                <!-- <div class="timeslot-picker--fallback"><span>Schedule your pickup</span></div> -->
                <div class="wrap-form">
                    <input type="text" id="search-input" placeholder="Near Laundry Shop To You">
                    <button type="submit" id="search-button" class="site_button">Search</button>
                </div>
            </form>
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
            
        </div>
    </div>
</section>


<section class="near-stores">
    <div class="site_container">
        <h2 class="site-heading">Nearby Stores </h2>
        <div class="separator"></div>
        <div class="content">
            <ul>
                <?php 
                for($x=0; $x<3; $x++)
                {
                    echo '<li title="" name="" style="">
                            <div class="left">
                                <a href="#" target="_blank">
                                    <img src="'.get_template_directory_uri().'/assets/image/store-01.jpg">
                                </a>
                            </div>
                            <div class="right">
                                <h5 class="title">
                                    <a href="#" target="_blank">Vyapar Kendra Gurgaon</a>
                                </h5>
                                <p class="address"><span> <span class="dashicons dashicons-location"></span> 3rd floor 44 Regal Building Connaught Place New Delhi 110001</span></p>
                                <p class="outcomes mediumhigh">
                                <a href=tel:+91-9667664759"><span class="dashicons dashicons-phone"></span>+91-9667664759</a>
                                </p>
                                <a href="#" class="book">Order now</a>
                            </div>
                        </li>';
                }
                ?>
            </ul>
            <div class="site_button">
                <a href="#">See all Stores </a>
            </div>
        </div>
    </div>
</section>

<div class="landing-benefits--wrapper pt-80 pb-88 pb-md-120 pt-md-128">
   <div class="container">
      <div class="row text-center justify-content-center mb-64 mb-md-40">
         <div class="col-12 col-md-8">
            <h2 class="main-heading" id="landingBenefitsTitle">How we perform cleaning.</h2>
         </div>
      </div>
      <div class="row justify-content-center text-center mb-80 mb-md-120">
         <div class="col-12 col-md-10 offset-md-1 d-flex flex-column align-items-center">
            <div class="landing-key-items-wrapper">
               <div class="key-item me-md-24">
                 <?php
                    echo '<img src="'.get_template_directory_uri().'/assets/icons/24hr.png">';
                 ?>
                  <div class="fw-bold" id="landingBenefitsTurnaround">24h turnaround time</div>
               </div>
               <div class="key-item me-md-24">
                <?php
                    echo '<img src="'.get_template_directory_uri().'/assets/icons/delivery-truck.svg">';
                 ?>
                  <div class="fw-bold" id="landingBenefitsCollection">Free collection and delivery</div>
               </div>
               <div class="key-item">
                 <?php
                    echo '<img src="'.get_template_directory_uri().'/assets/icons/support.svg">';
                 ?>
                  <div class="fw-bold" id="landingBenefitsSupport">Dedicated 24/7 support</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="service-section">
   <div class="site_container">
      <h2 class="site-heading">Our work / services</h2>
      <p class="service-offer">Flat 20% Off On Your Ultra And Dry Cleaning Service</p>
      <div class="separator"></div>
      <div class="service-grid">
         <div class="service-item">
            <a href="https://wa.me/919667664759" class="service-link" aria-label="Wash & Fold">
               <div class="service-icon"><img src="https://bookmylaundry.in/wp-content/uploads/2024/01/laundry-3.png" alt=""></div>
               <h3 class="service-title">Wash & Fold</h3>
            </a>
         </div>
         <div class="service-item">
            <a href="https://wa.me/919667664759" class="service-link" aria-label="Wash & Iron">
               <div class="service-icon"><img src="https://bookmylaundry.in/wp-content/uploads/2024/01/shirt-1.png" alt=""></div>
               <h3 class="service-title">Wash & Iron</h3>
            </a>
         </div>
         <div class="service-item">
            <a href="https://wa.me/919667664759" class="service-link" aria-label="Ultra Clean">
               <div class="service-icon"><img src="https://bookmylaundry.in/wp-content/uploads/2024/01/brightening.png" alt=""></div>
               <h3 class="service-title">Ultra Clean</h3>
            </a>
         </div>
         <div class="service-item">
            <a href="https://wa.me/919667664759" class="service-link" aria-label="Dry Cleaning">
               <div class="service-icon"><img src="https://bookmylaundry.in/wp-content/uploads/2024/01/dry-cleaning-1.png" alt=""></div>
               <h3 class="service-title">Dry Cleaning</h3>
            </a>
         </div>
         <div class="service-item">
            <a href="https://wa.me/919667664759" class="service-link" aria-label="Steam Ironing">
               <div class="service-icon"><img src="https://bookmylaundry.in/wp-content/uploads/2023/12/ironing.png" alt=""></div>
               <h3 class="service-title">Steam Ironing</h3>
            </a>
         </div>
         <div class="service-item">
            <a href="https://wa.me/919667664759" class="service-link" aria-label="Shoe Cleaning">
               <div class="service-icon"><img src="https://bookmylaundry.in/wp-content/uploads/2023/12/shoeshine-1.png" alt=""></div>
               <h3 class="service-title">Shoe Cleaning</h3>
            </a>
         </div>
         <div class="service-item">
            <a href="https://wa.me/919667664759" class="service-link" aria-label="Leather Cleaning">
               <div class="service-icon"><img src="https://bookmylaundry.in/wp-content/uploads/2024/01/leather-jacket.png" alt=""></div>
               <h3 class="service-title">Leather Cleaning</h3>
            </a>
         </div>
         <div class="service-item">
            <a href="https://wa.me/919667664759" class="service-link" aria-label="Bag Cleaning">
               <div class="service-icon"><img src="https://bookmylaundry.in/wp-content/uploads/2024/01/laundry-bag.png" alt=""></div>
               <h3 class="service-title">Bag Cleaning</h3>
            </a>
         </div>
      </div>
   </div>
</div>


<section class="custom_category" style="display:none;">
    <div class="site_container">
        <h3 class="site-heading">Our Work</h3>
        <div class="separator"></div>
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
<section class="pricing-section">
    <div class="site_container">
        <h2 class="site-heading">Our Pricing</h2>
        <div class="separator"></div>
        <div class="wrap-tabs">
            <div class="tab">
                <ul>
                    <li class="item active">Men's Clothing</li>
                    <li class="item">Women's Clothing</li>
                    <li class="item">HouseHold</li>
                    <li class="item">Steam Iron Women</li>
                    <li class="item">Strem Iron Men</li>
                    <li class="item">Laundry per KG</li>
                    <li class="item">Exclusive Product</li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="pricing-card active">
                    <!-- <h3>Men's Clothing</h3> -->
                    <ul>
                        <li><strong>Shirt</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Pants</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Suit</strong>   <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Shirt</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                    </ul>
                    <ul>
                        <li class="view-all"><a href="#">View All</a></li>
                    </ul>
                </div>
                <div class="pricing-card">
                    <!-- <h3>Women's Clothing</h3> -->
                    <ul>
                        <li><strong>Blouse</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Skirts</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Dress</strong>   <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Kurti</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                    </ul>
                    <ul>
                        <li class="view-all"><a href="#">View All</a></li>
                    </ul>
                </div>

                <div class="pricing-card">
                    <!-- <h3>HouseHold</h3> -->
                    <ul>
                        <li><strong>Pillow</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Bedsheet</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Matress</strong>   <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Blanket</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                    </ul>
                    <ul>
                        <li class="view-all"><a href="#">View All</a></li>
                    </ul>
                </div>

                <div class="pricing-card">
                    <!-- <h3>Steam Iron Women</h3> -->
                    <ul>
                        <li><strong>Kurta Heavy</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Kurta Plain</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Kurta</strong>   <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Shorts</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                    </ul>
                    <ul>
                        <li class="view-all"><a href="#">View All</a></li>
                    </ul>
                </div>

                <div class="pricing-card">
                    <!-- <h3>Steam Iron Men</h3> -->
                    <ul>
                        <li><strong>Shirt Skirt</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Shirt </strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Jeans</strong>   <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Shorts</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                    </ul>
                    <ul>
                        <li class="view-all"><a href="#">View All</a></li>
                    </ul>
                </div>

                <div class="pricing-card">
                    <!-- <h3>Laundry per KG</h3> -->
                    <ul>
                        <li><strong>Shirt Silk</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Shirt </strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Jeans</strong>   <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Shorts</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                    </ul>
                    <ul>
                        <li class="view-all"><a href="#">View All</a></li>
                    </ul>
                </div>
                <div class="pricing-card">
                    <!-- <h3>Other Product</h3> -->
                    <!-- <ul>
                        <li>Shoes/Sandle Dry Cleaning - $6</li>
                        <li>Bag Dry Cleaning	- $8</li>
                        <li>Car Cleaning	 - $12</li>
                    </ul> -->
                    <ul>
                        <li><strong>Shoes/Sandle Dry Cleaning</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Bag Dry Cleaning </strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Car Cleaning</strong>   <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                    </ul>
                    <ul>
                        <li class="view-all"><a href="#">View All</a></li>
                    </ul>
                </div>
                <div class="pricing-card">
                    <!-- <h3>Other Product</h3> -->
                    <ul>
                        <li>Shoes/Sandle Dry Cleaning - $6</li>
                        <li>Bag Dry Cleaning	- $8</li>
                        <li>Car Cleaning	 - $12</li>
                        <li>Regular iron per pc		 - $12</li>
                        <li>Steam iron per pc		 - $12</li>
                        
                    </ul>

                    <ul>
                        <li><strong>Shoes/Sandle Dry Cleaning</strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Bag Dry Cleaning </strong>  <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Regular iron per pc</strong>   <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                        <li><strong>Steam iron per pc</strong>   <a href="#"><span>Rs. 50/150</span> <span class="price">Add To Cart</span></a></li>
                    </ul>
                    <ul>
                        <li class="view-all"><a href="#">View All</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="testimonial-slider">
    <div class="site_container">
         <h2 class="site_heading">Testimonial</h2>
         <div class="separator"></div>
         <div class="slider_content">

            <!-- <div class="left">
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
              </div> -->


              <div class="right">
                <div class="inner-item testimonial_slider">
                    <div class="card">
                        <div class="img-wrapper">
                            <img src="https://codingyaar.com/wp-content/uploads/headshot-1-scaled.jpg" class="d-block w-100" alt="..."> 
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lisa</h5>
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
                            <h5 class="card-title">Angel</h5>
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
                            <h5 class="card-title">Naria</h5>
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
                   <a href="" class="site_button"> <span id="landingUpsellSmallCTA">Schedule your pickup</span> </a>
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
                 <div class="separator"></div>
                 <h2>Which is best for you?</h2>
                 <!-- <div class="separator"></div> -->
             
            </div>
            <!-- <div class="right">
                <p>At Book My Laundry, we are not just another laundry and dry cleaning service; we are pioneers in reinventing the future of garment care.</p>
            </div> -->
        </div>   
        <div class="locations">
            <div class="w-html">
                <ul style="margin: 0; color:#fff;">
                    <li> 
                       <a href="#">
                            <!-- <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons">  -->
                            <span class="dashicons dashicons-location"></span>
                            <span> Noida Sector 29 </span>
                       </a>
                    </li>
                    <li>
                        <a href="#">
                            <!-- <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons">  -->
                            <span class="dashicons dashicons-location"></span>
                            <span> Noida Sector 76 </span>
                       </a>
                    </li>
                    <li>
                      <a href="#">
                            <!-- <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons">  -->
                            <span class="dashicons dashicons-location"></span>
                            <span> Alpha 2 Gr. Noida</span>
                       </a>
                    </li>
                    <li>
                        <a href="#">
                            <!-- <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons">  -->
                            <span class="dashicons dashicons-location"></span>
                            <span> Noida Sector 104</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="dashicons dashicons-location"></span>
                            <!-- <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons">  -->
                            <span> Dwarka</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <!-- <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons">  -->
                            <span class="dashicons dashicons-location"></span>
                            <span> Vyapar Kendra Gurgaon</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <!-- <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons"> -->
                            <span class="dashicons dashicons-location"></span>
                             <span> Ludhiana Trade Tower Ludhiana </span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <!-- <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-maps.png" alt="icons">  -->
                            <span class="dashicons dashicons-location"></span>
                            <span> Chander nagar Ghaziabad </span>
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
          <div class="left">
            <h3>Latest Blogs</h3>
            <div class="separator"></div>
            <p>Stay updated with the best of garment and home cleaning</p>
          </div>
       </div> 
       <div class="bloglist">
            <div class="item">
                <div class="outer-content">
                   <a href="#">
                        <div class="wrap-image">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/image/blog-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <time datetime="August 21, 2023"><i class="houzez-icon icon-calendar-3 mr-1"></i> August 21, 2023</time>
                            <h2>Laundry Mastery</h2>
                            <h3>Explore expert tips for perfect laundry results, from stain removal to fabric care.</h3>
                        </div>
                   </a>
                </div>
            </div>
            <div class="item">
               <a href="#">
                <div class="outer-content">
                        <div class="wrap-image">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/image/blog-2.jpg" alt="">
                        </div>
                        <div class="content">
                            <time datetime="August 21, 2023"><i class="houzez-icon icon-calendar-3 mr-1"></i> August 21, 2023</time>
                            <h2>Green Laundry</h2>
                            <h3>Discover eco-friendly practices and products for a sustainable laundry routine. </h3>
                        </div>
                    </div>
               </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="outer-content">
                        <div class="wrap-image">
                            <img src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/image/blog-3.jpg" alt="">
                        </div>
                        <div class="content">
                            <time datetime="August 21, 2023"><i class="houzez-icon icon-calendar-3 mr-1"></i> August 21, 2023</time>
                            <h2>Laundry Chemistry</h2>
                            <h3>Unlock the science behind effective detergents and fabric care for fresh, clean clothes. </h3>
                        </div>
                    </div>
                </a>
            </div>
       </div>

        <a href="#" class="link">
            View All Blog 
        </a>
    </div>
</section>


<div class="faq-section">
        <h2 class="site-heading">FAQs</h2>
        <div class="separator"></div>
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-title">Are there any clothing items that cannot be dry cleaned? <span class="dashicons dashicons-arrow-down-alt2"></span></div>
                <div class="accordion-content">Customers may want to know if there are any restrictions on what can be dry cleaned, such as delicate fabrics or items with embellishments.</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title">Do you offer pickup and delivery services?<span class="dashicons dashicons-arrow-down-alt2"></span></div>
                <div class="accordion-content">Offering convenience services like pickup and delivery can be a significant selling point for busy customers.</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title">What payment methods do you accept?<span class="dashicons dashicons-arrow-down-alt2"></span></div>
                <div class="accordion-content">Customers may want to know the accepted payment methods for their convenience.</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title">What should I do if I have a specific stain on my garment?<span class="dashicons dashicons-arrow-down-alt2"></span></div>
                <div class="accordion-content">Providing guidance on stain removal or recommending professional treatment options can be helpful for customers dealing with stubborn stains.</div>
            </div>
        </div>
        <button id="see-all-btn">See All</button>
    </div>
<?php
get_footer();
