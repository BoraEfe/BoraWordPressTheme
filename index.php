<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

            <div class="entry-meta">
                <span>Gepubliceerd op <?php the_time('d M Y'); ?></span>
                <span>door <?php the_author(); ?></span>
            </div>

            <div class="entry-content">
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Lees meer</a>
            </div>
        </article>
    <?php endwhile; ?>

    <div class="pagination">
        <?php
        echo paginate_links(array(
                'prev_text' => __('« Vorige'),
                'next_text' => __('Volgende »'),
        ));
        ?>
    </div>

<?php else : ?>
    <p>Geen berichten gevonden.</p>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
