<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php if( is_paged() || ! esplanade_is_teaser() ) : ?>
		<header class="entry-header">
	<?php endif; ?>
			<<?php esplanade_title_tag( 'post' ); ?> class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></<?php esplanade_title_tag( 'post' ); ?>>
	<?php if( is_paged() || ! esplanade_is_teaser() ) : ?>
			<aside class="entry-meta">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a> |
				<?php _e( 'Filed under', 'esplanade' ); ?>: <?php the_category( ', ' ) ?>
				<?php edit_post_link( __( 'Edit', 'esplanade' ), ' | ', '' ); ?>
			</aside><!-- .entry-meta -->
		</header><!-- .entry-header -->
	<?php endif; ?>
	<div class="entry-summary">
		<?php esplanade_post_gallery(); ?>
	</div><!-- .entry-summary -->
	<div class="clear"></div>
</article><!-- .post -->
<?php if( esplanade_is_teaser() ) : ?>
	<?php esplanade_teaser_clearfix(); ?>
<?php endif; ?>
