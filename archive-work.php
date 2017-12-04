<?php get_header(); ?>

<section class="intro">
    <h2>We Let Our Work Do the Talking</h2>

    <p class="instructions">Click the pictures learn more.</p>
    <?php if (have_posts()) : ?>
        <div class="portfolio-container">
            <?php while (have_posts()) :

                the_post(); ?>

                    <figure class="portfolio-section">
                        <img src="<?= the_post_thumbnail(); ?>">
                        <figcaption>
                            <div>
                                <h3><?= the_title(); ?></h3>
                                <p>Learn More About This Project.</p>
                            </div>
                            <a href="<?php the_permalink(); ?>"></a>
                        </figcaption>
                    </figure>

            <?php endwhile; ?>

        </div>

    <?php endif; ?>

</section>

<?php get_footer(); ?>
