<?php get_header(); ?>



<!-- main -->

<main class="single-wrap clearfix">
  <aside>
    <?php get_sidebar(); ?>
  </aside>
  <div>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <figure class="thumbnail">
          <?php the_post_thumbnail(); ?>
        </figure>
        <h3><?php the_title(); ?></h3>
        <p><?php the_date(); ?></p>
        <?php the_category(); ?>
        <?php the_content(); ?>

      <?php endwhile; ?>
      <?php else : ?> <p>コンテンツがありません</p>
    <?php endif; ?>

  </div>
</main>

<!-- main -->



<?php get_footer(); ?>