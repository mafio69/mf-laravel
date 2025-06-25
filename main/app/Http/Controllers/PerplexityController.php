<?php

namespace App\Http\Controllers;

use App\Services\PerplexityService;
use App\Models\PerplexityResponse;
use Illuminate\Http\Request;

class PerplexityController extends Controller
{
    protected PerplexityService $service;

    public function __construct(PerplexityService $service)
    {
        $this->service = $service;
    }

    public function add(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        try {
            $data = $this->service->ask($request->input('question'));
            $response = new PerplexityResponse($data);

            return response()->json([
                'answer' => $response->answer,
                'sources' => $response->sources,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
