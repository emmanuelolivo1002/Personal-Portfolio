<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="grid-container project project-main">
	<div class="grid-x grid-margin-x">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="cell small-12 medium-6">
				<img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title()?>">
				<?php if (get_field('gallery')) :?>
					<div class="project-gallery">
						<?php the_field('gallery'); ?>
					</div>
				<?php endif;?>
			</div>
			<div class="cell small-12 medium-6">
				<h1><?php the_title()?></h1>
				<div class="project-content">
					<?php the_content();?>
					<div class="project-links">
						<?php if (get_field('link_to_project')) :?>
							<a href="<?php the_field('link_to_project'); ?>" target="_blank" class="big-button main-link"><i class="fas fa-link"></i> Link to Project</a>
						<?php endif;?>
						<?php if (get_field('link_to_github')) :?>
							<a href="<?php the_field('link_to_github'); ?>" target="_blank" class="big-button github-link"><i class="fab fa-github"></i> Link to Source</a>
						<?php endif;?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</div>
<?php get_footer();

