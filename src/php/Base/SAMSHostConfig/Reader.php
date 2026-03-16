<?php
namespace SAMSPlugin\Base\SAMSHostConfig;

use InvalidArgumentException;
use SAMSPlugin\Editor\Models\SAMSHostConfig;

class Reader
{
	public static function Read(int $sams_host_config_id) :SAMSHostConfig
	{
		$config_post = get_post($sams_host_config_id);
		
		if (!$config_post) {
			throw new InvalidArgumentException("Invalid SAMS host config ID: $sams_host_config_id");
		}

		$all_metas = get_post_meta($sams_host_config_id);

		$title = get_post_meta($sams_host_config_id, '_sams_host_config_title', true);
		$baseUrl = get_post_meta($sams_host_config_id, '_sams_host_config_url', true);
		$apiKey = get_post_meta($sams_host_config_id, '_sams_host_config_api_key', true);

		return new SAMSHostConfig($sams_host_config_id, "", $baseUrl, $apiKey);
	}
}