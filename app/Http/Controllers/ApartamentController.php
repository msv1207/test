<?php

namespace App\Http\Controllers;

use App\Services\SearchService;
use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;

class ApartamentController extends Controller
{
    public SearchService $searchService;

    public function __construct(SearchService $searchService)
    {
        $this->searchService=$searchService;
    }

    public function search(SearchRequest $request)
    {
        $response = $this->searchService->search($request);

        return $response;
    }

}
