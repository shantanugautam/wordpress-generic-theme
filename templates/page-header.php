<?php
    if ( has_post_thumbnail() ) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
    }
?>

<div class="page-header" style="background:<?php the_field('banner_background_colour');?> url(<?php echo $large_image_url[0]; ?>) center center">
  <h1>
    <?php // echo roots_title(); ?>
  </h1>
</div>
