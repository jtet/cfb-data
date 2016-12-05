<?php
namespace CFBData;

class Scoreboard
{
    const BASE_URL = 'http://site.api.espn.com/apis/site/v2/sports/football/college-football/scoreboard';

    static function get($year, $week, $groups = null, $season_type = null)
    {
            $query = [
                'year'=>$year,
                'week'=>$week
            ];

            if(!is_null($groups))
            {
                $query['groups'] = $groups;
            }

            if(!is_null($season_type))
            {
                $query['season_type'] = $season_type;
            }

            $uri = sprintf("%s?%s", self::BASE_URL, http_build_query($query));
            $client = new \GuzzleHttp\Client();
            $res = $client->request('GET', $uri);

            if($res->getStatusCode() == 200)
            {
                return json_decode($res->getBody());
            }
            else{
                return false;
            }
    }
}