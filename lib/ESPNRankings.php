<?php
namespace CFBData;

class ESPNRankings
{
    const BASE_URL = 'http://cdn.espn.com/core/college-football/rankings/_/seasontype/%s/year/%s/week/%s?xhr=1&render=true&device=desktop';

    static function get($year, $week, $season_type = 2)
    {
        $uri = sprintf(self::BASE_URL, $season_type, $year, $week);
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $uri);

        if ($res->getStatusCode() == 200) {
            $body = json_decode($res->getBody());
            return $body->content->data->rankings;
        } else {
            return false;
        }
    }
}