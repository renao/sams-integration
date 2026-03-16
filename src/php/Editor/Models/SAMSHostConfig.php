<?php

namespace SAMSPlugin\Editor\Models;

class SAMSHostConfig
{
    private int $id;
    private string $title;
    private string $baseUrl;
    private string $apiKey;

    public function __construct(int $id, string $title, string $baseUrl, string $apiKey)
    {
        $this->id = $id;
        $this->title = $title;
        $this->baseUrl = $baseUrl;
        $this->apiKey = $apiKey;
    }

    public function is_valid(): bool
    {
        return isset($this->id) 
            && isset($this->title) 
            && isset($this->baseUrl)
            && trim($this->baseUrl) !==''
            && isset($this->apiKey)
            && trim($this->apiKey) !== '';
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }
}
