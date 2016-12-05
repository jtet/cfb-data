<?php
namespace CFBData;

class Rankings
{
    const BASE_URL = 'http://site.api.espn.com/apis/site/v2/sports/football/college-football/rankings';

    static function get($year, $week, $season_type = null)
    {
        $query = [
            'year' => $year,
            'week' => $week
        ];

        if (!is_null($season_type)) {
            $query['season_type'] = $season_type;
        }

        $uri = sprintf("%s?%s", self::BASE_URL, http_build_query($query));
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $uri);

        if ($res->getStatusCode() == 200) {
            return json_decode($res->getBody());
        } else {
            return false;
        }
    }
}