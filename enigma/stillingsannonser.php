<?php /* Template Name: Stillingsannonser */ ?>
<?php
/**
 * @package enigma
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="annonsebanner">
				<!--<h1>Kommer snart</h1>-->
				<a href="http://enigma.hiof.no/stillingsutlysning/">Ønsker du å sette inn en stillingsannonse?</a>
			</div>
			<?php
			// the query
			$query = new WP_Query( 'post_type=any' ); ?>

		<?php if (  $query->have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while (  $query->have_posts() ) :  $query->the_post(); ?>
				<?php if (in_category('Stillingsannonser')) : ?>
						<div class="secondaryPost">
						<a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, array( 350, 200), $attr ); ?></a>
						<a href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<p>Publisert: <date><?php the_date(' d-m-Y'); ?> </date></p>
						<p><?php echo excerpt(15);?>...<br />
						<a href="<?php echo get_permalink(); ?>"> Les mer</a></p>
						</div>
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
