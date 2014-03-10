<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">
					
					<h2>Data Challenge<span class="highlight">Using data to explore</span></h2>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
						
							<?php the_post_thumbnail( 'wpbs-featured' ); ?>
							
							<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
							
							<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<h3>Description</h3>
							<?php the_content(); ?>
							
<?php if(get_post_meta($post->ID, 'wpcf-organisation', true)) { ?>
	<h3>Organisation</h3>
	<?php echo get_post_meta($post->ID, 'wpcf-organisation', true); ?>
<?php } ?>

<?php if(get_post_meta($post->ID, 'wpcf-suggested-data-sets', true)) { ?>
	<h3>Suggested Data Sets</h3>
	<?php echo get_post_meta($post->ID, 'wpcf-suggested-data-sets', true); ?>
<?php } ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php /* <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?> */ ?>
							
							<?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","wpbootstrap"); ?></a>
							<?php } ?>
							
 						</footer> <!-- end article footer -->

						<nav>
							<?php
								echo previous_post_link('%link', 'Previous Data Challenge', false);
								echo next_post_link('%link', 'Next Data Challenge', false); 
							?>
						</nav>
					
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
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->    
   
			</div> <!-- end #content -->

<?php get_footer(); ?>
