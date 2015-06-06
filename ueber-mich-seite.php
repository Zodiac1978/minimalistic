<?php
/*
Template Name: Über Mich Seite
*/
get_header(); ?>

<div id="content-wrapper">
    <section id="primary" class="content-area container">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <div class="headline">
                    <h3><?php the_title();?></h3>
                    <span class="border"></span>
                </div>
            <div class="row">
              <div id="content" class="column-width" role="main">
                <section>
                <?php the_content();?>
                </section>
            </div>
        <?php endwhile; endif; ?>

            <aside id="sidebar" class="column">
                <h4>Mein Lieblingslied</h4>
                <div class="lieblingslied"><?php echo get_post_meta($post->ID, 'lieblingslied', true); ?></div>
            </aside>
         </div>
    </section>
</div>



<?php get_footer(); ?>