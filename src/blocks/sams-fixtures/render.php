<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

use SAMSPlugin\FixturesFetcher;
?>

<div <?php echo get_block_wrapper_attributes(); ?>>

<?php

if (isset($attributes)
	&& isset($attributes['apiKey'])
	&& isset($attributes['associationUrl'])
	&& isset($attributes['matchSeriesId'])
	&& isset($attributes['teamId'])) {

	$fetcher = new FixturesFetcher();
	$fixtures = $fetcher->fetch(
		$attributes['associationUrl'],
		$attributes['apiKey'],
		$attributes['matchSeriesId'],
		$attributes['teamId']);
	
	$template_path = sams_integration_get_template( 'fixtures-template.php' );

	if (file_exists($template_path)) {
		$sams_integration_fixtures = $fixtures;
		include $template_path;
	}

} else {
	// Display error message on invalid configuration
	esc_html_e('Error in SAMS Fixtures: Configuration missing or incomplete', 'sams-integration');
}

?>

</div>

