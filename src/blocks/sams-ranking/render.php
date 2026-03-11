<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

use SAMSPlugin\RankingFetcher;
use SAMSPlugin\Editor\Models\RankingConfig;
?>

<div <?php echo get_block_wrapper_attributes(); ?>>

	<?php

	if (isset($attributes['rankingConfig']) && is_array($attributes['rankingConfig'])) {
		$configArr = $attributes['rankingConfig'];
		$rankingConfig = new RankingConfig(
			samsHostConfigId: $configArr['samsConfigId'] ?? null,
			matchSeriesId: $configArr['matchSeriesId'] ?? null,
			matchSeriesName: $configArr['matchSeriesName'] ?? "no match series name"
		);

		if ($rankingConfig->is_valid()) {
			$config_post = get_post($rankingConfig->samsHostConfigId);

			if ($config_post) {
				$associationUrl = get_post_meta($config_post->ID, '_sams_host_config_url', true);
				$apiKey = get_post_meta($config_post->ID, '_sams_host_config_api_key', true);

				$fetcher = new RankingFetcher();
				$ranking = $fetcher->fetch(
					baseUrl: $associationUrl,
					apiKey: $apiKey,
					matchSeriesId: $rankingConfig->matchSeriesId
				);

				$template_path = sams_integration_get_template('ranking-template.php');
				if (file_exists($template_path)) {
					$sams_integration_ranking = $ranking;
					include $template_path;
				}
			} else {
				esc_html_e('Error in SAMS Ranking: Configuration not found', 'sams-integration');
			}
		} else {
			esc_html_e('Error in SAMS Ranking: Configuration missing or incomplete', 'sams-integration');
		}
	} else {
		esc_html_e('Error in SAMS Ranking: Configuration missing or incomplete', 'sams-integration');
	}
	?>

</div>