<?php
namespace CFBData;

class Standings
{
    const BASE_URL = 'http://cdn.espn.com/core/college-football/standings/_/season/%s/view/%s';

    static function get($year, $type='fbs')
    {
        $query = [
            'xhr' => 1,
            'render' => 'false',
            'device' => 'desktop',
            'userab' => 18
        ];

        $baseUrl = sprintf(self::BASE_URL, $year, $type);

        $uri = sprintf("%s?%s", $baseUrl, http_build_query($query));
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $uri);

        if ($res->getStatusCode() == 200) {
            return json_decode($res->getBody());
        } else {
            return false;
        }
    }
}