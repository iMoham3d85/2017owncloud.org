<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php if (is_page(12)): //News ?>
 <?php get_template_part('template-parts/blog-posts'); ?>
<?php endif; ?>
