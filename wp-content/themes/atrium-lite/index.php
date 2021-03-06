<?php
/**
 * The main template file.
 *
 *
 * @package atrium
 */

get_header(); ?>

<?php if (!is_front_page()): ?>
  <div id="header">
    <div class="headersquare"></div>
    <?php if (has_post_thumbnail(get_option('page_for_posts'))): ?>
      <div class="featuredthumb"><?php echo(get_the_post_thumbnail(get_option('page_for_posts'), 'atrium-singlethumb')); ?></div>
    <?php endif ?>
        <div class="pagetop">
          <?php if( is_home() && get_option('page_for_posts') ) { $blog_page_id = get_option('page_for_posts'); echo '<h1 class="entry-title">'.esc_html(get_page($blog_page_id)->post_title).'</h1>'; } ?>
        </div>
    </div>
<?php endif ?>

<div id="wrapper" class="animatedParent animateOnce">
  <div id="contentwrapper" class="animated fadeIn">
    <div id="contentfull">
      <?php if (have_posts()) : ?>
      <?php while ( have_posts() ) : the_post();
  				get_template_part( 'content', get_post_format() );
  			endwhile; ?>
      <?php the_posts_pagination(); ?>
      <?php else : ?>
      <p class="center">
        <?php esc_html_e( 'You don&#39;t have any posts yet.', 'atrium-lite' ); ?>
      </p>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
