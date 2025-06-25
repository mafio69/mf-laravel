<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PerplexityService
{
    protected string $apiUrl = 'https://api.perplexity.ai/v1/answer';
    protected string $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.perplexity.api_key');
    }

    public function ask(string $question): array
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$this->apiKey,
            'Content-Type' => 'application/json',
        ])->post($this->apiUrl, [
            'question' => $question,
        ]);

        if ($response->failed()) {
            throw new \Exception('Błąd połączenia z API: '.$response->body());
        }

        return $response->json();
    }
}
