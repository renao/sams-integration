<?php

namespace SAMSPlugin\Base\SAMSProxy;

use SAMSPlugin\Base\SAMSProxy\BaseConfig;
use SAMS\RestClient\Api\SAMSAssociationsAPIApi;

class AssociationsProxy
{
    public function __construct()
    {
        add_action('rest_api_init', function () {
            register_rest_route(BaseConfig::$rest_base_route, '/associations', [
                'methods' => 'GET',
                'callback' => [$this, 'sams_get_associations'],
                'permission_callback' => '__return_true', // ggf. anpassen
            ]);
        });
    }

    public function sams_get_associations(\WP_REST_Request $request)
    {
        // Hole den Parameter samsConfigId aus der Anfrage
        $sams_host_config_id = $request->get_param('samsConfigId');
        $host_config = $this->resolve_sams_host_config($sams_host_config_id);
        
        if (!$host_config || !$host_config->is_valid()) {
            return new \WP_Error('missing_params', 'Ungültige oder fehlende Konfiguration', ['status' => 400]);
        }

        try {
            $client = new SAMSAssociationsAPIApi();
            $result = $client->getAssociations(x_api_key: $host_config->getApiKey(), size: 100);
            return new \WP_REST_Response($result, 200);
        } catch (\Exception $e) {
            return new \WP_Error('proxy_error', $e->getMessage(), ['status' => 502]);
        }
    }

    private function resolve_sams_host_config($sams_host_config_id) : \SAMSPlugin\Editor\Models\SAMSHostConfig
    {
        return  \SAMSPlugin\Base\SAMSHostConfig\Reader::Read($sams_host_config_id);
    }
}


