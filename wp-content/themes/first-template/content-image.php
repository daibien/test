<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
        	<?php first_theme_thumbnail( 'large' ); ?>
 			<?php first_theme_entry_header(); ?>
 			<?php
			/*
			* Đếm số lượng attachment có trong post
			*/
			   $attachments = get_children( array( 'post_parent'=>$post->ID ) );
			   $attachment_number = count($attachments);
			   printf( __('This image post contains %1$s photos', 'thachpham'), $attachment_number );
			?>
        </header>
        <div class="entry-content">
 			<?php first_theme_entry_content(); ?>
        	<?php ( is_single() ? first_theme_entry_tag() : '' ); ?>
        </div>
</article>