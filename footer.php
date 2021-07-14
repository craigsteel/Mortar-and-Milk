
<footer class="page-footer row">
<div class="container">

	 <div class="col span12_4">		 
		<h3 class="hide-mobile">Mortar &amp; Milk</h3>
		<img class="hide-desktop logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Mortar_And_Milk_Logo.png">
		<nav class="footer-menu-main">
	      <?php wp_nav_menu(array('theme_location' => 'footer-main', 'menu_class' => 'footer1-menu','container' => false)); ?>
	    </nav>
	</div>

	<div class="col span12_4">
		<h3>Customer Service</h3>
	    <nav class="footer-menu-service">
	      <?php wp_nav_menu(array('theme_location' => 'footer-service', 'menu_class' => 'footer2-menu','container' => false)); ?>
	    </nav>
	 </div>

	<div class="col span12_4 last">

	<h3>Newsletter</h3>
	<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
		<form action="http://mortarandmilk.us12.list-manage.com/subscribe/post?u=4401e664ee7f01ff1919ce7a9&amp;id=175231e199" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>

		    <div id="mc_embed_signup_scroll" class="input">
				<input type="email" value="" placeholder="Enter your email" name="EMAIL" class="required email" id="mce-EMAIL">
			    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4401e664ee7f01ff1919ce7a9_175231e199" tabindex="-1" value=""></div>
		   		<button id="mc-embedded-subscribe" class="search-submit"><span class="icon icon-arrow-right"></span></button>
		    </div>
		</form>
		</div>
		
	<!--End mc_embed_signup-->

	<h3>Follow Us</h3>

	<div class="social-icons">
	<a href="#"><span class="icon icon-facebook"></span></a>
	<a href="#"><span class="icon icon-twitter"></span></a>
	<a href="#"><span class="icon icon-youtube"></span></a>
	<a href="#"><span class="icon icon-pinterest"></span></a>
	<a href="#"><span class="icon icon-instagram"></span></a>
	</div>

	</div>

</div> <!-- / .container -->
</footer> <!-- / .page-footer.row -->

<footer class="page-footer copyright row">
<div class="container">

	<strong><?php bloginfo('name'); ?></strong> &copy; Copyright <?php echo date("Y"); ?> All Rights Reserved. .

</div> <!-- / .container -->
</footer> <!-- / .page-footer.row -->

<!-- Wordpress wp_footer Output -->
<?php wp_footer(); ?>
<!-- / Wordpress wp_footer Output -->

<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/common.min.js"></script>

</body>
</html>