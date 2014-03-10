<?php get_header(); ?>

			<div id="content" class="clearfix row">

				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h2 class="post-heading"><?php the_title();?>
						<?php if( get_post_meta($post->ID, 'wpcf-subheading', true) ) { ?>
							<span class="highlight"><?php echo get_post_meta($post->ID, 'wpcf-subheading', true); ?> </span>
						<?php } ?>
					</h2>


					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header>

                                                        <?php the_post_thumbnail( 'wpbs-featured' ); ?>

                                                        <?php /* <div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div> */ ?>

						</header> <!-- end article header -->

						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>

						</section> <!-- end article section -->

						<footer>

							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ', ', '</p>'); ?>

						</footer> <!-- end article footer -->

					</article> <!-- end article -->

					<?php comments_template('',true); ?>

					<?php endwhile; ?>

					<?php else : ?>

					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					</article>

					<?php endif; ?>

				</div> <!-- end #main -->



			</div> <!-- end #content -->

<?php get_footer(); ?>
