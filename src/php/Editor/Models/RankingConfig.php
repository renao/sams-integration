<?php

namespace SAMSPlugin\Editor\Models;

class RankingConfig {
    public ?int $samsHostConfigId;
    public ?string $matchSeriesId;
    public ?string $matchSeriesName;

    public function __construct(
        ?int $samsHostConfigId,
        ?string $matchSeriesId,
        ?string $matchSeriesName = "") {
            
            $this->samsHostConfigId = $samsHostConfigId;
            $this->matchSeriesId = $matchSeriesId;
            $this->matchSeriesName = $matchSeriesName;
    }

    public function is_valid() : bool {
        
        return isset($this->samsHostConfigId) 
        && isset($this->matchSeriesId)
        && isset($this->matchSeriesName);
    }
}

?>