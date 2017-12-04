<?php get_header(); ?>
<main class="blog-stories">
	<h2>Blog</h2>
	<?php if (have_posts()) :
		while (have_posts()) :

			the_post(); ?>

			<!-- NEWS STORY SECTION  -->
			<section class="story">
				<a class="thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_excerpt(); ?></p>
			</section>

	<?php endwhile; ?>
	<?php else: ?>
		<p>Sorry, there is no news which is usually good news unless you like news in which case it's bad news.</p>
	<?php endif; ?>

</main>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
