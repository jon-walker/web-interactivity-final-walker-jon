<div class="parallax-divider"></div>
<!-- CONTACT SECTION (Appears on each page) -->
<section class="contact-bar">
	<h2><a href="contact.html">Want to Know More?</a></h2>
	<ul>
		<li class="phone-icon">630.892.4031</li>
		<li class="email-icon">D.Raw@DLRawlings.com</li>
		<li class="address-icon">39 West New York Street</li>
		<li class="space">Aurora, IL 60506</li>
	</ul>
</section>

<!-- FOOTER -->
<footer>
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left')) ?>
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-center')) ?>
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right')) ?>
    <p class="copyrights"><small>&copy; <?= date('Y'); ?> Jonathan Walker</small></p>
</footer>

<?php wp_footer(); ?>

<!-- GOOGLE ANALYTICS IS LOADED WITHIN THE MAIN.JS FILE -->

</body>
</html>
