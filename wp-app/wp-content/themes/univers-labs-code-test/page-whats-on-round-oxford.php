<?php get_header(); ?>

<div class="container">
    <h1 class="title">
        <?php the_title(); ?>
    </h1>
</div>

<div class="background__whats-on">
    <div class="container">

        <?php
        // Check value exists.
        if (have_rows('whats_on')) : ?>
            
                <div class="row whats-on">

                <?php // Loop through rows.
                while (have_rows('whats_on')) : the_row();

                    // Case: Large box.
                    if (get_row_layout() == 'large_box') : ?>
                        <div class="large-box">
                            <a href="<?php the_sub_field('link'); ?>" class="whats-on__link">
                                <div class="whats-on-image__container">
                                    <?= wp_get_attachment_image(get_sub_field('image'), 'large', null, array("class" => "whats-on__image")); ?>
                                </div>

                                <div class="box-content">
                                    <span class="subtitle"><?php the_sub_field('subtitle'); ?></span>
                                    <h1><?php the_sub_field('title'); ?></h1>
                                    <img class="box-arrow" alt="" src="/wp-content/themes/univers-labs-code-test/assets/arrow.svg" style="filter: invert(1);">
                                </div>
                            </a>
                        </div>

                    <?php
                    // Case: Small box.
                    elseif (get_row_layout() == 'small_box') : ?>
                        <div class="small-box">
                            <a href="<?php the_sub_field('link'); ?>" class="whats-on__link">
                                <div class="whats-on-image__container">
                                    <?= wp_get_attachment_image(get_sub_field('image'), 'large', null, array("class" => "whats-on__image")); ?>
                                </div>

                                <div class="box-content">
                                    <span class="subtitle"><?php the_sub_field('subtitle'); ?></span>
                                    <h1><?php the_sub_field('title'); ?></h1>
                                    <img class="box-arrow" alt="" src="/wp-content/themes/univers-labs-code-test/assets/arrow.svg">
                                </div>
                            </a>
                        </div>

                    <?php
                    // Case: Small box without image.
                    elseif (get_row_layout() == 'small_box_no_image') : ?>
                        <div class="small-box no-image">
                            <div class="box-content">
                                <a href="<?php the_sub_field('link'); ?>" class="whats-on__link">
                                    <span class="subtitle"><?php the_sub_field('subtitle'); ?></span>
                                    <h1><?php the_sub_field('title'); ?></h1>
                                    <?php the_sub_field('content'); ?>
                                    <img class="box-arrow" alt="" style="align-self: flex-start;" src="/wp-content/themes/univers-labs-code-test/assets/arrow.svg">
                                </a>
                            </div>
                        </div>

                    <?php
                    endif;

                // End loop.
                endwhile; ?>

            </div>

        <?php endif;
        ?>

    </div>
</div>

<?php get_footer(); ?>