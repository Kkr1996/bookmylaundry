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
					src="https://prod-cdn.laundryheap.com/assets/app_stores/app_store2x-a73b1c878a8772f8f5cea32472ec7cfd2b6f1fd21dde21c6836ff2f4d8eb9c8e.png">
				</a>
				<a href="#" rel="noopener" target="_blank">
					<img width="107" height="32" loading="lazy" alt="Play store2x" src="https://prod-cdn.laundryheap.com/assets/app_stores/play_store2x-1529597177b6267b5a63d73a4174ba925a2f204a36871e247bfc944c477e3593.png">
				</a>
			</div>
         </div>
         <div class="item">
            <p class="mb-12">Follow us</p>
            <div class="landing-footer--image-row gap-10">
				<a href="https://www.facebook.com/laundryheap" rel="noopener">
					<img width="28" height="28" loading="lazy" alt="Facebook" src="https://prod-cdn.laundryheap.com/assets/social/new/facebook-31f3c36b2cd22528dfcd0ff00cce57354300ddb52357c97a26d41bc43f5adaed.png">
				</a>
				<a href="https://twitter.com/laundryheap" rel="noopener">
					<img width="28" height="28" loading="lazy" alt="Twitter" src="https://prod-cdn.laundryheap.com/assets/social/new/twitter-19a7fd8ae10f6272315f8454143fe20798e6e309a27a776661a76617632692f3.png">
				</a>
				<a href="https://www.instagram.com/laundryheap_uk" rel="noopener">
					<img width="28" height="28" loading="lazy" alt="Instagram" src="https://prod-cdn.laundryheap.com/assets/social/new/instagram-34c2b6748ad2dc63281aec8d3ccb6fcae92ff0658a1bd5427e7d03ea0a7639c7.png">
				</a>
				<a href="https://www.linkedin.com/company/laundryheap" rel="noopener">
					<img width="28" height="28" loading="lazy" alt="Linkedin" src="https://prod-cdn.laundryheap.com/assets/social/new/linkedin-577ad0d33a91ce5cf4af7d2f475fe422844f107aaa1fb460ef8a1d225b329368.png">
				</a>
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

<?php wp_footer(); ?>

</body>
</html>
