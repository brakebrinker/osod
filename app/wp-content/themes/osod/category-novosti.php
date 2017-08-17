<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'posts_per_page' => 1,
    'cat'            => 18,
    'order'          => 'DESC',
    'paged'          => $paged
);

$newsPosts = query_posts($args);

$countNews = 0;
$wrapperNews = false;
$wrapperPost = false;
?>
<?php get_header(); ?>
<form action="#" class="sort wrapper">
	<label>
		<span>Выберите категорию: </span>
		<select name="sort" id="">
			<option value="broken">ММГ</option>
			<option value="blank">СХП</option>
			<option value="ammo">Патроны</option>
		</select>
	</label>
	<label>
		<span>Сортировать по месяцу: </span>
		<select name="currency">
			<option value="july17">Июль 2017 года</option>
			<option value="june17">Июнь 2017 года</option>
			<option value="may17">Май 2017 года</option>
		</select>
	</label>
</form>
<?php foreach($newsPosts as $post) { 
	setup_postdata($post); 
	$countNews ++;

	if ($countNews == 1) $wrapperNews = true; else $wrapperNews = false;
	if ($countNews == 5) $wrapperPost = true; else $wrapperPost = false;
?>
<?php if ($wrapperNews) { ?>
<div class="wrapper news">
	<div class="subscribe">
		<div class="text">
			<h3>Будь в курсе новостей</h3>
			<p>Подпишитесь на рассылку, чтобы быть всегда вкурсе свежих новостей</p>
			<form action="#">
				<input type="email" placeholder="Email">
				<button class="white" type="submit">Подписаться</button>
			</form>
		</div>
		<a href="" class="more">посмотреть все новости</a>
	</div>
	<div class="post-wrapper">
<?php } elseif ($wrapperPost) {?>
<div class="wrapper post-wrapper">
<?php } ?>
		<div class="post-loop" id="<?php if ($countNews == 1) echo 'post1'; else echo 'post'; ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, full); ?>)">
			<span class="date"><?php echo get_the_date(); ?></span>
			<div class="text">
				<h5><?php the_title(); ?></h5>
				<a href="<?php the_permalink(); ?>" class="more">Узнать больше</a>
			</div>
		</div>
<?php if ($countNews == 4) echo '</div></div>'; ?>
<?php } ?>
</div>
<div class="tools">
	<button><i class="fa-refresh"></i> Показать еще</button>
<?php
get_template_part( 'pagination' );
wp_reset_query(); // сброс
?>
</div>
<div class="tools">
	<button><i class="fa-refresh"></i> Показать еще</button>
	<div class="pagination">
		<a href="">1</a>
		<a href="">2</a>
		<a href="">3</a>
		<a href="">4</a>
		<a href="">5</a>
		<span>...</span>
		<a href="">20</a>
	</div>
</div>
<?php
get_footer();
?>