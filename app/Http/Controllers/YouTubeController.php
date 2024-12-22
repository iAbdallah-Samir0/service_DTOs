<?php

namespace App\Http\Controllers;

use App\Services\YouTubeService;
use Illuminate\Http\Request;

class YouTubeController extends Controller
{
    protected $youtubeService;

    public function __construct(YouTubeService $youtubeService)
    {
        $this->youtubeService = $youtubeService;
    }

    public function search(Request $request)
    {
        $query = $request->input('query', 'Laravel');
        $videos = $this->youtubeService->searchVideos($query);

        return view('Youtube.search', compact('videos'));
    }

}
