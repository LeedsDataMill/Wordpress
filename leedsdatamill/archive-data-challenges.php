<?php get_header(); ?>

	<div id="content" class="clearfix row data-requests">
		<div class="divider divider2">
		<div class="container">
		<div id="main" class="col-sm-12 clearfix alt" role="main">
			<h2>Data<span class="highlight">Challenges</span></h2>
			<?php if (!is_user_logged_in()) { ?>
				<a href="#" class="register btn link-btn">Register / login as a user</a>
			<?php } else { ?>
				<a href="#" class="btn link-btn add-challenge">Suggest a data challenge</a>
			<?php } ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix data-challenges'); ?> role="article">

				<section class="post_content">
					<?php if(!is_user_logged_in()) { ?>
						<div class="row">
							<div class="col-sm-6">
								<?php echo do_shortcode('[wppb-login]'); ?>
							</div>
							<div class="col-sm-6">
								<?php echo do_shortcode('[wppb-register]'); ?>
							</div>
					<?php } else { ?>
<form method="post">
	<fieldset>
		<div class="form-group">
			<label>Challenge Title</label>
			<input class="form-control" name="challenge-title" type="text" value="">
		</div>
		<div class="form-group">
			<label>Organisation</label>
			<input class="form-control" name="organisation" type="text" value="">
		</div>
		<div class="form-group">
			<label>Suggested data sets</label>
			<textarea class="form-control" name="suggested-data-sets"></textarea>
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description"></textarea>
		</div>
		<button class="btn" type="submit" name="add_data_request">Submit suggestion</button>
	</fieldset>
</form>
					<?php } ?>
				</section> <!-- end article section -->

			</article> <!-- end article -->
</div><!-- end main -->
</div><!-- end container -->
</div><!-- end divider -->
			<section class="data-requests">
<div class="container">
	<div class="row">
              	              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix col-sm-4'); ?> role="article">

					<header>
						<h2 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
					</header> <!-- end article header -->

					<section class="post_content">
						<?php the_post_thumbnail( 'wpbs-featured' ); ?>
						<?php the_excerpt(); ?>
					</section> <!-- end article section -->

				</article> <!-- end article -->
				<?php endwhile; ?>
				<?php endif; ?>
				</div><!-- end row -->
				</div><!-- end container -->
			</section> <!-- end section.data-requests -->
	</div> <!-- end #content -->

<?php get_footer(); ?>

