<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="project">

    <!-- INTRO SECTION  -->
    <div id="project__intro" class="intro">
        <p class="img">
            <?php the_post_thumbnail(); ?>
        </p>
        <h2>Kane Co. Public Safety Training Center</h2>
        <?php the_field('overview_text'); ?>
    </div>

    <!-- SECTION 1 -->
    <section id="project__phase1">
        <!-- Prints image to screen if present -->
        <p class="img">
            <?php $image = get_field('phase_1_img');
            if( !empty($image) ): ?>
                <img srcset="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
            <?php endif; ?>
        </p>
        <h3><span class="phase-title">Phase 1:</span><br/>Schematic Design</h3>
        <?php the_field('phase_1_text'); ?>
    </section>

    <!-- SECTION 2 -->
    <section id="project__phase2">
        <p class="img left-half">
            <?php $image = get_field('phase_2_img');
            if( !empty($image) ): ?>
                <img srcset="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
            <?php endif; ?>
        </p>
        <h3><span class="phase-title">Phase 2:</span><br/>Design Development</h3>
        <?php the_field('phase_2_text'); ?>
    </section>

    <!-- SECTION 3 -->
    <section id="project__phase3">
        <p class="img">
            <p class="img">
                <?php $image = get_field('phase_3_img');
                if( !empty($image) ): ?>
                    <img srcset="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
                <?php endif; ?>
            </p>
        </p>
        <h3><span class="phase-title">Phase 3:</span><br/>Construction Permits</h3>
        <?php the_field('phase_3_text'); ?>
    </section>

    <!-- SECTION 4 -->
    <section id="project__phase4">
        <p class="img left-half">
            <?php $image = get_field('phase_4_img');
            if( !empty($image) ): ?>
                <img srcset="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
            <?php endif; ?>
        </p>
        <h3><span class="phase-title">Phase 4:</span><br/>Bidding and Negotiation</h3>
        <?php the_field('phase_4_text'); ?>
    </section>

    <!-- SECTION 5 -->
    <section id="project__phase5">
        <p class="img left-half">
            <?php $image = get_field('phase_5_img');
            if( !empty($image) ): ?>
                <img srcset="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
            <?php endif; ?>
        </p>
        <h3><span class="phase-title">Phase 5:</span><br/>Construction Management</h3>
        <?php the_field('phase_2_text'); ?>
    </section>

</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
