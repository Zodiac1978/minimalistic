<?php 
get_header(); ?>

<div id="content-wrapper">
    <section id="primary" class="content-area container">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <div class="headline">
                    <h3><?php the_title();?></h3>
                    <span class="border"></span>
                </div>
            <div class="entrytext">
                <?php the_content();?>
            </div>

        <?php endwhile; endif; ?>
    </section>
</div>


<?php get_footer(); ?>