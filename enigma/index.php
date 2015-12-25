<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package enigma
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if (in_category('Nyheter')) : ?>
					<?php $c++;
						if( $c == 1) :?>
						<div class="firstPost">
						<a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?></a>
						<a href="<?php echo get_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
						<p>Publisert: <date><?php the_date(' d-m-Y'); ?> </date></p>
						<p><?php echo excerpt(70); ?>...<br />
						<a href="<?php echo get_permalink(); ?>"> Les mer</a></p>
						</div>

						<?php else :?>
						<div class="secondaryPost">
						<a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, array( 350, 200), $attr ); ?></a>
						<a href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<p>Publisert: <date><?php the_date(' d-m-Y'); ?> </date></p>
						<p><?php echo excerpt(20);?>...<br />
						<a href="<?php echo get_permalink(); ?>"> Les mer</a></p>
						</div>
						<?php endif;?>
					<?php


						/*get_template_part( 'content', get_post_format() );*/
					?>
				<?php endif; ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
