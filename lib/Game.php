<?php
namespace CFBData;

class Game
{
    const BASE_URL = 'http://cdn.espn.com/core/college-football/playbyplay';

    static function get($gameId)
    {
        $query = [
            'gameId'=>$gameId,
            'xhr'=>1,
            'render'=>'false',
            'userab'=>18
        ];

        $uri = sprintf("%s?%s", self::BASE_URL, http_build_query($query));
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $uri);

        if($res->getStatusCode() == 200)
        {
            $response = json_decode($res->getBody());
            $game = new \stdClass();
            $game->scoringPlays = $response->gamepackageJSON->scoringPlays;
            $game->drives = $response->gamepackageJSON->drives;
            $game->teams = $response->gamepackageJSON->header->competitions[0]->competitors;
            $game->id = $response->gamepackageJSON->header->id;
            $game->competitions = $response->gamepackageJSON->header->competitions;
            $game->season = $response->gamepackageJSON->header->season;
            $game->week = $response->gamepackageJSON->header->week;

            return $game;
        }
        else{
            return false;
        }
    }
}