<?php

namespace App\Models;

class PerplexityResponse
{
    public string $answer;
    public array $sources;

    public function __construct(array $data)
    {
        $this->answer = $data['answer'] ?? '';
        $this->sources = $data['sources'] ?? [];
    }
}
