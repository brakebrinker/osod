<?php get_header(); ?>
<div class="wrapper contacts">
	<div class="info">
		<h6>Электронная почта</h6>
		<a href="mailto:info@armeut.ru">info@armeut.ru</a>
		<h6>Телефон, WhatsApp / Viber</h6>
		<a href="tel:+79162495865">+7-916-249-58-65</a>
		<br>
		<span>Пн-Вс, с 10.00 до 22.00 по московскому времени</span>
		<h6>социальные сети</h6>
		<div class="social">
			<a href="" class="fa-vk"></a>
			<a href="" class="fa-facebook"></a>
			<a href="" class="fa-instagram"></a>
			<a href="" class="fa-youtube-play"></a>
		</div>
		<h6>Адрес</h6>
		<span>Москва. ул. Новосел 22а</span>
		<button class="white">Проложить маршрут</button>
	</div>
	<div class="form">
		<h4>Написать письмо</h4>
		<form action="#">
			<div>
				<input type="text" placeholder="Ваше имя*" required>
				<input type="email" placeholder="Электронная почта*" required>
			</div>
			<textarea  placeholder="Сообщение" name="" rows="3"></textarea>
			<button>Отправить</button>
		</form>
	</div>
</div>
<div class="map"></div>
<?php
get_footer();
?>