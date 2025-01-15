<?php

namespace WebAppz;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class WebAppz {
    private string $apiUrl;
    private string $apiKey;
    private Client $client;

    public function __construct(string $apiKey, string $apiUrl = "https://api.webappz.org") {
        if (empty($apiKey)) {
            throw new \InvalidArgumentException("API key is required.");
        }

        $this->apiKey = $apiKey;
        $this->apiUrl = $apiUrl;

        $this->client = new Client([
            'base_uri' => $this->apiUrl,
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->apiKey,
            ],
        ]);
    }

    public function setupWebhook(string $keyId, string $webhookUrl): array {
        try {
            $response = $this->client->post("/api/keys/{$keyId}/setupWebhook", [
                'json' => [
                    'webhook_url' => $webhookUrl,
                ],
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            throw new \RuntimeException($e->getMessage());
        }
    }

    public function getWebhookStatus(string $keyId): array {
        try {
            $response = $this->client->get("/api/keys/{$keyId}/webhookStatus");

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            throw new \RuntimeException($e->getMessage());
        }
    }
}
