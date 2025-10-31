<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package buscon
 */

get_header();

$buscon_error_image = cs_get_option( 'tx_error_image', get_template_directory_uri() . '/assets/img/error.webp' );
if(isset($buscon_error_image['url'])) {
	$image_url = $buscon_error_image['url'];
} else {
	$image_url = get_template_directory_uri() . '/assets/img/error.webp';
}

$buscon_error_title = cs_get_option('tx_error_title', __('Oops! Page Not found.', 'buscon'));
$buscon_error_link_text = cs_get_option('tx_error_link_text', __('Back To Home Page', 'buscon'));
$tx_error_button_icon = cs_get_option('tx_error_button_icon', 'fas fa-long-arrow-alt-right');

?>

<section class="not-found pt-120 pb-120">
	<div class="container chy-container-1">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<?php if(!empty( $image_url )) : ?>
				<div class="image">
					<img src="<?php echo esc_url($image_url); ?>" alt="<?php if(function_exists('buscon_img_alt_text')) { echo buscon_img_alt_text($image_url); } ?>" />
				</div>
				<?php endif; ?>
				<?php if(!empty( $buscon_error_title )) : ?>
				<h2 class="error-title"><?php print esc_html($buscon_error_title);?></h2>
				<?php endif; ?>
				<!-- Button Box -->

				<?php if(!empty( $buscon_error_link_text )) : ?>
				<div class="error-one_button btn-wrap mt-50">
					<a href="<?php echo home_url(); ?>" class="txa-pr-btn-5">
						<span class="text">
							<?php print esc_html($buscon_error_link_text);?>
						</span>
						<?php if(!empty( $tx_error_button_icon )) : ?>
						<span class="icon">
							<i class="<?php echo esc_attr($tx_error_button_icon); ?>"></i>
						</span>
						<?php endif; ?>
					</a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
