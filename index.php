<?php
get_header(); ?>

<div id="articles-wrapper">
    <section id="articles" class="container">
        <div class="headline">
            <h3><?php echo __( 'Die neusten Einträge', 'minimalistic' );?></h3>
            <span class="border"></span>
        </div>
<div class="row">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
        <div class="column">
            <section>
                <div class="image"><?php the_post_thumbnail(); ?></div>
                <div class="post-content clearfix">
                    <span class="post-date"><?php the_time('j. F Y' ); ?></span>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_content(); ?></p>
                    <div class="article-info clearfix">
                        <span class="post-category"><?php the_category(); ?></span>
                        <span class="post-link"><a href="<?php the_permalink(); ?>"><?php echo __( 'Mehr lesen', 'minimalistic' );?></a></span>
                    </div>
                    </span>
                </div>
            </section>
        </div>
    <?php endwhile; endif; ?>
</div>
</section>
</div>

<?php get_footer(); ?>
