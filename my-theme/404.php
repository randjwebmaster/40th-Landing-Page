<?php get_header(); ?>

<main id="main">
  <h1><?php esc_html_e( 'Page Not Found', 'my-theme' ); ?></h1>
  <p><?php esc_html_e( 'The page you are looking for could not be found.', 'my-theme' ); ?></p>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return Home', 'my-theme' ); ?></a>
</main>

<?php get_footer(); ?>
