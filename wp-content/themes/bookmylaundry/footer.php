<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bookmylaundry
 */

?>
<!--
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'bookmylaundry' ) ); ?>">
				<?php
				//printf( esc_html__( 'Proudly powered by %s', 'bookmylaundry' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'bookmylaundry' ), 'bookmylaundry', '<a href="http://underscores.me/">Underscores.me</a>' );
			//	?>
		</div>
	</footer>
!-->

<div class="landing-footer--wrapper">
   <div class="site_container">
  	  <hr class="mb-24 mt-32 d-none d-md-block">
      <div class="landing-footer--top">
         <div class="item">
            <p class="mb-12">Powered by</p>
            <div class="landing-footer--image-row gap-10">
				<?php
					the_custom_logo();
				?>
			</div>
         </div>
         <div class="item">
            <p class="mb-12">Download our mobile app</p>
			<div class="landing-footer--image-row app flex-wrap gap-10">
				<a href="#" rel="noopener" target="_blank">
					<img width="107" height="32" loading="lazy" alt="App store2x" 
					src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/playstore-apple.png">
				</a>
				<a href="#" rel="noopener" target="_blank">
					<img width="107" height="32" loading="lazy" alt="Play store2x" src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/google-play.png">
				</a>
			</div>
         </div>
         <div class="item">
			<div class="address">
				<p class="mb-12">Follow us</p>
				<div class="landing-footer--image-row gap-10">
					<a href="#" rel="noopener">
						<img width="28" height="28" loading="lazy" alt="Facebook" src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/facebook.png">
					</a>
					<a href="#" rel="noopener">
						<img width="28" height="28" loading="lazy" alt="Twitter" src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/twitter.png">
					</a>
					<a href="#" rel="noopener">
						<img width="28" height="28" loading="lazy" alt="Instagram" src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/instagram.png">
					</a>
					<a href="#" rel="noopener">
						<img width="28" height="28" loading="lazy" alt="Linkedin" src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/linkedin.png">
					</a>
				</div>
				<p class="mb-12 addr">Address</p>
				<ul>
					<li>
						<strong>Corporate Office</strong> – 3rd floor 44 Regal Building Connaught Place New Delhi 110001
						<br>
						<strong>Head office </strong> – 1/27 wave sliver tower.. Noida sector 18 up 201301
					</li>
					<li>
						<strong>Our Live stores</strong>
						Shop no G22 Noida sector 46 Tulip Mall Noida UP 201301
						Shop no L/5A DDA flats Alaknanda kalkaji South Delhi, New Delhi 110019
					</li>
				</ul>
			</div>
         </div>
		 <div class="item contact-us">
            <p class="mb-12">Contact Us</p>
            <ul>
				<li>
					<label for="">Customer care</label>
					<p><a href="tel:+91-9667664759"><span class="dashicons dashicons-phone"></span> +91-9667664759</a></p>
				</li>
				<li>
					<label for="">Store</label>
					<p><a href="tel:"> <span class="dashicons dashicons-phone"></span> +91-9289300463</a></p>
				</li>
				<li>
					<label for="">Email</label>
					<p><span class="dashicons dashicons-email"></span> <a href="mail:bookmylaundry0@gmail.com">bookmylaundry0@gmail.com</a></p>
				</li>
			</ul>
         </div>
      </div>
      <hr class="mb-24 mt-32 d-none d-md-block">

	  <div class="custom-footer-wrapper">
	  <div class="custom-footer-container">
		<div class="custom-footer-row">
			<div class="custom-footer-col">
				<h5 class="custom-section-title">Explore</h5>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#how-it-works">How it works</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#pricing">Prices &amp; Services</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#help-center">Help Centre</a>
				</div>
				<div class="custom-footer-item">
				<div class="support-button-wrapper chat-button" onclick="openCorrectChat()">
					<img width="24" height="24" class="me-4" loading="lazy" alt="Support" src="<?php echo site_url();?>/wp-content/themes/bookmylaundry/assets/icons/chat.svg">
					<p>Chat with us</p>
					<script>
						function openCorrectChat() {
							// Your chat function here
						}
					</script>
				</div>
				</div>
			</div>
			<div class="custom-footer-col">
				<h5 class="custom-section-title">Our solutions</h5>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#laundry-near-me">Laundry Near Me</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#dry-cleaning-near-me">Dry Cleaning Near Me</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#laundry">Laundry</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#dry-cleaning">Dry cleaning</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#dry-cleaners">Dry cleaners</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#laundromats-launderettes">Laundromats &amp; launderette</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#hotels">Hotel laundry</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#broken-washing-machine">Broken washing machine?</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#student-discount">Student discounts</a>
				</div>
			</div>
			<div class="custom-footer-col">
				<h5 class="custom-section-title">Our company</h5>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#about-us">About Book My Lanudry</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#blog">Blog</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#locations">Locations</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#customer-reviews">Customer reviews</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#sustainability">Sustainability</a>
				</div>
			</div>
			<div class="custom-footer-col">
				<h5 class="custom-section-title">Work with us</h5>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#careers">Careers</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#partner-drivers">Partner drivers</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#cleaning-partners">Cleaning partners</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#hotel-partnerships">Hotel partnerships</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#brand-partnerships">Brand partnerships</a>
				</div>
				<div class="custom-footer-item">
				<a class="custom-footer-link" href="#laundry-for-business">Laundry for business</a>
				</div>
			</div>
		</div>
	</div>
	</div>



	<hr class="mb-24 mt-32 d-none d-md-block">
      <div class="landing-footer--bottom">
         <div class="row justify-content-between mb-32 mb-md-6 flex-column-reverse flex-md-row flex-nowrap align-items-center gap-32">
            <div class="col">
               <p class="landing-footer--bottom--copyright d-inline-block">
				All rights reserved. © Book My Laundry 2020. By visiting this page you agree to our <a href="/privacy"> privacy policy </a> and <a href="/terms"> terms and conditions. </a>
			  </p>
            </div>
         </div>
      </div>
   </div>
</div>



</div>



<div class="floating-buttons">
  <!-- WhatsApp button -->
  <a href="https://wa.me/8284910963" class="whatsapp" target="_blank">
	<img src="<?php echo get_template_directory_uri();?>/assets/icons/whatsapp-svg.svg" class="arrow">
  </a>
  <!-- Phone call button -->
  <a href="tel:8284910963" class="phone">
  		<img src="<?php echo get_template_directory_uri();?>/assets/icons/phone-calling.svg" class="arrow phone-icon">
  </a>
	<div class="topto">
		<a href="#" class="scroll-top">
			<img src="<?php echo get_template_directory_uri();?>/assets/icons/up-arrow-svg.svg" class="arrow">
		</a>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
