<?php
/**
 * Custom block patterns for 1st Choice Child theme.
 *
 * @package Yo_Base_Layer
 */

function firstchoice_register_block_patterns() {

	register_block_pattern_category(
		'firstchoice',
		array( 'label' => __( '1st Choice', 'firstchoice' ) )
	);

	register_block_pattern(
		'firstchoice/we-put-you-first',
		array(
			'title'       => __( 'We Put You 1st', 'firstchoice' ),
			'description' => __( 'Intro section with services grid and free inspection CTA.', 'firstchoice' ),
			'categories'  => array( 'firstchoice' ),
			'content'     => firstchoice_pattern_we_put_you_first(),
		)
	);

	register_block_pattern(
		'firstchoice/warranty-and-insurance',
		array(
			'title'       => __( 'Warranty & Insurance Claims', 'firstchoice' ),
			'description' => __( 'Workmanship warranty row and insurance claims row.', 'firstchoice' ),
			'categories'  => array( 'firstchoice' ),
			'content'     => firstchoice_pattern_warranty_and_insurance(),
		)
	);
}
add_action( 'init', 'firstchoice_register_block_patterns' );

function firstchoice_pattern_we_put_you_first() {
	$services = array(
		array(
			'icon'  => 'roof',
			'title' => __( 'Residential Roofing', 'firstchoice' ),
			'desc'  => __( 'Durable roof repairs, replacements, and maintenance to safeguard your home and improve long-term value.', 'firstchoice' ),
		),
		array(
			'icon'  => 'building',
			'title' => __( 'Commercial & Multi-Family Roofing', 'firstchoice' ),
			'desc'  => __( 'Professional installation and restoration for flat, metal, and specialty commercial systems that keep your business protected and operational.', 'firstchoice' ),
		),
		array(
			'icon'  => 'storm',
			'title' => __( 'Storm & Hail Damage Repair', 'firstchoice' ),
			'desc'  => __( 'Fast, dependable repairs after hail, wind, or extreme weather. We restore your property with precision and care.', 'firstchoice' ),
		),
		array(
			'icon'  => 'siding',
			'title' => __( 'Siding Maintenance', 'firstchoice' ),
			'desc'  => __( 'Quality siding options to elevate your home\'s appearance. We install and replace siding, ensuring your property looks great and stays protected year-round.', 'firstchoice' ),
		),
		array(
			'icon'  => 'gutter',
			'title' => __( 'Gutters & Exterior Services', 'firstchoice' ),
			'desc'  => __( 'Complete exterior improvement solutions to enhance protection, drainage, and curb appeal.', 'firstchoice' ),
		),
	);

	ob_start();
	?>
<!-- wp:group {"className":"put-you-1st-section alignwide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide put-you-1st-section">
	<div class="wp-block-group__inner-container">

		<!-- wp:heading {"textAlign":"center","level":2,"className":"put-you-1st-heading"} -->
		<h2 class="wp-block-heading has-text-align-center put-you-1st-heading">WE PUT YOU <span class="badge-1st">1st</span>.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":"put-you-1st-sub"} -->
		<p class="has-text-align-center put-you-1st-sub">1st Choice Construction is your local, family-owned roofing team committed to delivering high-quality roofing solutions for homeowners and commercial property owners. We provide reliable workmanship, transparent communication, and a stress-free experience from inspection to completion</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"className":"services-grid","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
		<div class="wp-block-group services-grid">
		<?php foreach ( $services as $service ) : ?>
			<!-- wp:group {"className":"service-item","layout":{"type":"constrained"}} -->
			<div class="wp-block-group service-item">
				<div class="service-icon service-icon--<?php echo esc_attr( $service['icon'] ); ?>"><?php echo firstchoice_get_service_icon( $service['icon'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
				<!-- wp:heading {"level":3,"className":"service-title"} -->
				<h3 class="wp-block-heading service-title"><?php echo esc_html( $service['title'] ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"service-desc"} -->
				<p class="service-desc"><?php echo esc_html( $service['desc'] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		<?php endforeach; ?>
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"free-inspection-btn"} -->
			<div class="wp-block-button free-inspection-btn red"><a class="wp-block-button__link wp-element-button" href="#">FREE ROOF INSPECTION</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
</div>
<!-- /wp:group -->
	<?php
	return ob_get_clean();
}

function firstchoice_pattern_warranty_and_insurance() {
	ob_start();
	?>
<!-- wp:group {"className":"warranty-section","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group warranty-section">

	<!-- wp:group {"className":"warranty-text","layout":{"type":"constrained"}} -->
	<div class="wp-block-group warranty-text">
		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">Backed by Our Workmanship Warranty</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Your investment deserves protection. Every 1st Choice project comes with our comprehensive Limited Workmanship Warranty covering roof replacements, siding, gutters, and repairs. We're a local, Arnold-based company that stands behind our work. Therefore, quality roofing means long-term peace of mind for St. Louis property owners.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"warranty-btn"} -->
			<div class="wp-block-button warranty-btn"><a class="wp-block-button__link wp-element-button" href="#">Learn more about our warranty</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"warranty-images","layout":{"type":"flex"}} -->
	<div class="wp-block-group warranty-images">
		<!-- wp:image {"className":"warranty-image-1"} -->
		<figure class="wp-block-image warranty-image-1"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/inc/img/placeholder-commercial-roof.jpg" alt="Commercial flat roof restoration" /></figure>
		<!-- /wp:image -->
		<!-- wp:image {"className":"warranty-image-2"} -->
		<figure class="wp-block-image warranty-image-2"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/inc/img/placeholder-residential-roof.jpg" alt="Residential shingle roof close-up" /></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"className":"insurance-section alignwide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide insurance-section">

	<!-- wp:image {"className":"insurance-image"} -->
	<figure class="wp-block-image insurance-image"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/inc/img/placeholder-roofer-ladder.jpg" alt="Roofer inspecting a home on a ladder" /></figure>
	<!-- /wp:image -->

	<!-- wp:group {"className":"insurance-text","layout":{"type":"constrained"}} -->
	<div class="wp-block-group insurance-text">
		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">Insurance Claims Made Simple</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Filing a roofing claim shouldn't feel overwhelming. Our team guides you through every step of the process.</p>
		<!-- /wp:paragraph -->

		<!-- wp:list -->
		<ul class="wp-block-list">
			<!-- wp:list-item -->
			<li>We thoroughly assess and document storm or hail damage</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>Together, we review the agreement and choose the style, color, and quality of your materials</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>We'll confirm the scope of work and provide an initial pricing estimate</li>
			<!-- /wp:list-item -->
			<!-- wp:list-item -->
			<li>We communicate directly with your insurance adjuster and insurance carrier to finalize pricing</li>
			<!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"insurance-btn"} -->
			<div class="wp-block-button insurance-btn"><a class="wp-block-button__link wp-element-button" href="#">Book my free inspection</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
	<?php
	return ob_get_clean();
}

function firstchoice_get_service_icon( $icon ) {
	$icons = array(
		'roof'     => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 24L20 8L36 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 22V32H32V22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
		'building' => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="9" y="6" width="22" height="28" stroke="currentColor" stroke-width="2"/><path d="M14 12H17M23 12H26M14 18H17M23 18H26M14 24H17M23 24H26" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
		'storm'    => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 22a6 6 0 010-12 7 7 0 0113-2 6 6 0 015 6 5 5 0 01-1 10H11z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M21 24L17 30H21L18 36" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
		'siding'   => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 12H34M6 20H34M6 28H34" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>',
		'gutter'   => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 12H34V16H6V12Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M20 16V30M20 30L15 25M20 30L25 25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
	);

	return isset( $icons[ $icon ] ) ? $icons[ $icon ] : '';
}
