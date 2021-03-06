<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Akina
 */

get_header(); ?>

		<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( '搜索结果: %s', 'akina' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'get_post_format()' );

			endwhile;?>

			<div class="clearer"></div>

			<nav class="navigator">
				<?php previous_posts_link('<i class="iconfont">&#xe630;</i>') ?><?php next_posts_link('<i class="iconfont">&#xe634;</i>') ?>
			</nav>

		 <?php else : ?>
		 <div class="search-box">
             <!-- search start -->
             <form class="s-search">
                 <input class="text-input" type="search" name="s" placeholder="<?php _e('搜索...', 'akina') ?>">
             </form>
             <!-- search end -->
			</div>	
          <?php
			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
	
	
	
	


<?php
get_footer();
