<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/*
				 * A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<div id="suivez-nous">
					<h4>Suivez-nous !</h4>
						<a href="https://www.facebook.com/Centre-Hospitalier-de-Roubaix-Page-Officielle-295426447159694/" target="_blank" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-facebook.png" alt=""></a>
						<a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-google-plus.png" alt=""></a>
						<a href="https://www.youtube.com/user/CHdeRoubaix" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-youtube.png" alt=""></a>
				</div>
				<div id="info-importante">
					<ul>
						<li><strong>Adresse : </strong></br> CETRADIMN  26 boulevard Lacordaire, 59100 Roubaix</li>
						<li><strong>Téléphone : </strong></br> 03.20.99.30.40</li>
					</ul>
					<ul>
						<?php do_action( 'twentyeleven_credits' ); ?>
						<li><a href="<?php echo get_site_url(); ?>/mentions-legales/">Mentions légales</a></li>
						<li><a href="<?php echo get_site_url(); ?>/liens-utiles/">Liens utiles</a></li>
					</ul>
				</div>
				<ul id="lien-site">
					<li><a href="http://www.ch-roubaix.fr/" target="_blank">Site du CH Roubaix</a></li>
					<li><a href="http://www.ch-roubaix.fr/cancerologie/" target="_blank">Site de la cancérologie</a></li>
					<li><a href="http://ifsi.ch-roubaix.fr/" target="_blank">Site de l'IFSI / l'IFAS</a></li>
					<li><a href="http://neonatologie.ch-roubaix.fr/" target="_blank">Site de la néonatologie</a></li>
				</ul>
			</div>
	</footer><!-- #colophon -->
	<?php if(empty($_COOKIE['allow_cookie']) || $_COOKIE['allow_cookie']!=true) { ?>
		<div id="cookies">
			<p>En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies pour permettre des analyses statistiques. Cliquez sur "Plus d'informations" pour en savoir plus et modifier vos paramètres.</p>
			<button onclick="location.href='http://wordpress.martinwallet.fr/utilisation-des-cookies/'">En savoir plus</button>
			<button onclick="document.getElementById('cookies').style.display='none'; document.cookie='allow_cookie=true;'">Accepter</button>
		</div>
	<?php } ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/flexie.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/viewport-units-buggyfill.js"></script>
<script>window.viewportUnitsBuggyfill.init();</script>

</body>
</html>