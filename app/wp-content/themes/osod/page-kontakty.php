<?php get_header(); ?>
<div class="wrapper contacts">
	<div class="info">
		<?php if (get_field('email', get_queried_object_id())) { ?>
		<h6>Электронная почта</h6>
		<a href="mailto:<?php echo get_field('email', get_queried_object_id()); ?>"><?php echo get_field('email', get_queried_object_id()); ?></a>
		<?php } ?>
		<?php if (get_field('phone', get_queried_object_id())) { ?>
		<h6>Телефон, WhatsApp / Viber</h6>
		<a href="tel:<?php echo preg_replace("/[^0-9]/", '', get_field('phone', get_queried_object_id())); ?>"><?php echo get_field('phone', get_queried_object_id()); ?></a>
		<?php } ?>
		<?php if (get_field('timetable', get_queried_object_id())) { ?>
		<br>
		<span><?php echo get_field('timetable', get_queried_object_id()); ?></span>
		<?php } ?>
		<h6>социальные сети</h6>
		<div class="social">
			<?php dynamic_sidebar( 'footer-social' ); ?>
		</div>
		<?php if (get_field('address', get_queried_object_id())) { ?>
		<h6>Адрес</h6>
		<span><?php echo get_field('address', get_queried_object_id()); ?></span>
		<button class="white">Проложить маршрут</button>
		<?php } ?>
	</div>
	<div class="form">
		<h4>Написать письмо</h4>
		<?php echo do_shortcode('[contact-form-7 id="48" title="Написать письмо"]'); ?>
	</div>
</div>
<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4490.226194998278!2d37.6112497891772!3d55.75653751609491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2sMoscow%2C+Russia!5e0!3m2!1sen!2sby!4v1502963671375" width="100%" height="520" frameborder="0" style="border:0" allowfullscreen></iframe></div>
<?php
get_footer();
?>