<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

use SAMSPlugin\RankingFetcher;
?>

<div <?php echo get_block_wrapper_attributes(); ?>>

<?php

if (isset($attributes)
	&& isset($attributes['apiKey'])
	&& isset($attributes['associationUrl'])
	&& isset($attributes['matchSeriesId'])) {

	$fetcher = new RankingFetcher();
	$ranking = $fetcher->fetch($attributes['associationUrl'], $attributes['apiKey'], $attributes['matchSeriesId']);

	$template_path = sams_integration_get_template( 'ranking-template.php' );

	if (file_exists($template_path)) {
		$sams_integration_ranking = $ranking;
		include $template_path;
	}

} else {
	// Display error message on invalid configuration
	esc_html_e('Error in SAMS Ranking: Configuration missing or incomplete', 'sams-integration');
}
?>

</div>
