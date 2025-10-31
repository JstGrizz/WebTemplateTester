<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package buscon
 */

get_header();

$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 'col-xxl-8 col-xl-8 col-lg-8' : 'col-xxl-12 col-xl-12 col-lg-12';
?>

<div class="tx-blog-area blog-page-area pt-120 pb-120 fix">
    <div class="container chy-container-1">
        <div class="row">
			<div class="<?php print esc_attr( $blog_column );?>">
				<div class="blog__wrapper blog-page-item-wrap mt-none-30">
					<?php
						if ( have_posts() ):
    					if ( is_home() && !is_front_page() ):
    				?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title();?></h1>
					</header>

					<?php
						endif;
							/* Start the Loop */
							while ( have_posts() ): the_post();
								get_template_part( 'post-formats/content', get_post_format() );
							endwhile;
						?>
						<div class="pagination-outer text-center tx-pagination">
							<?php
								buscon_pagination( '
									<i class="fal fa-chevron-double-left"></i>',
									'<i class="fal fa-chevron-double-right"></i>  ',
									'',
									['class' => '']
								);
							?>
						</div>
						<?php
						else:
							get_template_part( 'post-formats/content', 'none' );
						endif;
					?>
				</div>
			</div>

			<?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
			<div class="col-xxl-4 col-xl-4 col-lg-4">
				<div class="tx-sidebarWrapper blog-2-page-sidebar mt-none-30">
					<?php get_sidebar();?>
				</div>
			</div>
			<?php endif;?>
        </div>
    </div>
</div>

<?php
get_footer();
