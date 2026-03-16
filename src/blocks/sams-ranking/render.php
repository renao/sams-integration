<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

use SAMSPlugin\RankingFetcher;
use SAMSPlugin\Editor\Models\RankingConfig;
use SAMSPlugin\Base\SAMSHostConfig\Reader;
?>

<div <?php echo get_block_wrapper_attributes(); ?>>

	<?php

	if (isset($attributes['rankingConfig'])
		&& is_array($attributes['rankingConfig'])
		&& (isset($attributes['rankingConfig']['samsConfigId'])
		&& isset($attributes['rankingConfig']['matchSeriesId']))
	) {
		
		$configArr = $attributes['rankingConfig'];

		$rankingConfig = new RankingConfig(
			samsHostConfigId: $configArr['samsConfigId'],
			matchSeriesId: $configArr['matchSeriesId'],
			matchSeriesName: $configArr['matchSeriesName'] ?? "no match series name"
		);

		if ($rankingConfig->is_valid()) {
			$host_config = Reader::Read($rankingConfig->samsHostConfigId);

			if ($host_config->is_valid()) {

				$fetcher = new RankingFetcher();
				$ranking = $fetcher->fetch(
					baseUrl: $host_config->getBaseUrl(),
					apiKey: $host_config->getApiKey(),
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