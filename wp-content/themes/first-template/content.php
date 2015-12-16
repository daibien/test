<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-thumbnail">
 			<?php first_theme_thumbnail( 'thumbnail' ); ?>
        </div>
        <header class="entry-header">
 			<?php first_theme_entry_header(); ?>
 			<?php first_theme_entry_meta() ?>
        </header>
        <div class="entry-content">
 			<?php first_theme_entry_content(); ?>
        	<?php ( is_single() ? first_theme_entry_tag() : '' ); ?>
        </div>
</article>