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
                <div class="bg-image" style="background-image:url('<?php echo site_url();?>/wp-content/uploads/2024/05/01.png')">
                       <div class="inner_content">
                            <h3> Experience the Freshness of Dry-Cleaned Perfection.</h3>
                            <h4>
                                World class<strong> DRY CLEAN</strong>
                                &amp; <strong>LAUNDRY</strong> service,
                                <strong>NOW IN INDIA</strong>
                            </h4>
                            <div class="wrap-container">
                                <p>World Renowned Machines<br>German Eco Friendly Cleaning Solutions</p>
                                <p><strong>Upto 25% OFF On First Order</strong></p> 
                            </div>
                            <a class="site_button">
                                <span class="text">Schedule Pickup</span>
                            </a>
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
        </div>
    </div>
</section>

<section id="search-section">
    <div class="timeslots d-none d-md-block mb-112">
    <div class="timeslot-picker">
        <div class="timeslot-picker--header">
            <span class="prompt text-body-main">Schedule your collection in</span>
            <span class="city text-body-main">New delhi</span>
            <span class="change-city text-button text-body-main">
                <span class="clickable">Change</span>
            </span>
        </div>
        <div class="timeslot-city-switcher">
            <div class="timeslot-city-switcher--list">
                <a href="/boston">
                <div class="timeslot-city-switcher--city" data-id="7">Dwarak Mor</div>
                </a>
            </div>
        </div>
        <div class="timeslot-picker--content">
            <div class="slots timeslot-picker--timeslots" data-city-id="" data-com-country="">
                <a href="#">
                <div class="slot">
                    <div class="slot--content">
                        <div class="slot--header">
                            earliest
                        </div>
                        <div class="slot--timeslot">in the next 45min</div>
                    </div>
                    
                </div>
                </a>
                <a href="#">
                <div class="slot">
                    <div class="slot--content">
                        <div class="slot--header">
                            last
                        </div>
                        <div class="slot--timeslot">20:00 - 22:00</div>
                    </div>
                    
                </div>
                </a>
                <div class="footer">
                <a href="#"><span class="text-button text-body-main">See all slots</span></a>
                </div>
            </div>
            <div class="timeslot-picker--fallback"><span>Schedule your pickup</span></div>
        </div>
    </div>
    </div>
    <form id="search-form">
        <div class="wrap-form">
            <input type="text" id="search-input" placeholder="Near Laundry Shop To You">
            <button type="submit" id="search-button">Search</button>
        </div>
    </form>
</section>

<div class="landing-benefits--wrapper pt-80 pb-88 pb-md-120 pt-md-128">
   <div class="container">
      <div class="row text-center justify-content-center mb-64 mb-md-40">
         <div class="col-12 col-md-8">
            <h2 class="main-heading" id="landingBenefitsTitle">We collect, clean, and deliver<br>your laundry and dry cleaning.</h2>
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


<?php
get_footer();