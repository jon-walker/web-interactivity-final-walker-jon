<?php get_header(); ?>


<!-- POST CONTENTS GO HERE -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="post">

		<p><?php the_post_thumbnail();?></p>
		<h2 class="post_title"><?php the_title(); ?></h2>
		<p class="post_date"><?php the_date(); ?></p>
		<p class="post_category">
			<?php

			// GET THE CATEGORIES
			$categories = get_the_category();

			//var_dump($categories); Used to list contents of array.

			// IF THERE'S A CATEGORY
			if ($categories) {

				// LOOP THROUGH THE CATEGORIES AND DISPLAY
				$i = 1;
				foreach ($categories as $display_category) {
					echo $display_category->name;

					// IF MORE THAN ONE CATEGORY
					if ( count($categories) > 0 && count($categories) > $i ) {
						echo ', ';
					}

					$i++;
				}
			}
			?>
		</p>
		<?php the_content(); ?>
	</article>

	<?php comments_template(); ?>

<?php endwhile; endif; ?>

<!-- SIDEBAR WITH WIDGETS WILL GO HERE -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
