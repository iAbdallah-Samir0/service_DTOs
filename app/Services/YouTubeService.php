<?php

namespace App\Services;
use Google\Client;
use Google\Service\YouTube;

class YouTubeService
{
    protected $youtube;

    public function __construct()
    {
        $client = new Client();
        $client->setApplicationName('YouTube Data API Integration');
        $client->setDeveloperKey(env('YOUTUBE_API_KEY'));

        $this->youtube = new YouTube($client);
    }

    public function searchVideos($query, $maxResults = 21)
    {
        $searchResponse = $this->youtube->search->listSearch('snippet', [
            'q' => $query,
            'maxResults' => $maxResults,
            'type' => 'video'
        ]);

        $videoIds = [];
        foreach ($searchResponse->getItems() as $item) {
            $videoIds[] = $item['id']['videoId'];
        }

        if (empty($videoIds)) {
            return [];
        }

        $videoDetailsResponse = $this->youtube->videos->listVideos('snippet,contentDetails,status', [
            'id' => implode(',', $videoIds)
        ]);

        $videos = [];
        foreach ($videoDetailsResponse->getItems() as $video) {
            if ($video['status']['embeddable']) {
                $videos[] = $video;
            }
        }

        return $videos;
    }
}
