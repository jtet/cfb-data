<?php
namespace CFBData;

use CFBData\Object\Game;
use CFBData\Object\Venue;

class ESPNScoreboard
{
    const BASE_URL = 'http://site.api.espn.com/apis/site/v2/sports/football/college-football/scoreboard';

    static function get($year, $week, $groups = null, $season_type = null, $shallow = false)
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

            $query['limit'] = 300;

            $uri = sprintf("%s?%s", self::BASE_URL, http_build_query($query));
            $client = new \GuzzleHttp\Client();
            $res = $client->request('GET', $uri);

            if($res->getStatusCode() == 200)
            {
                $scoreBoard = json_decode($res->getBody());
                $games = [];
                foreach($scoreBoard->events as $event)
                {
                    if(!isset($event->competitions[0]->venue))
                    {
                        $venue = new Venue();
                    }
                    else {
                        $venue = new \CFBData\Object\Venue();
                        $venue->setName($event->competitions[0]->venue->fullName);
                        $venue->setCity($event->competitions[0]->venue->address->city);
                        $venue->setState($event->competitions[0]->venue->address->state);
                        $venue->setIndoor($event->competitions[0]->venue->indoor);
                        $venue->setId($event->competitions[0]->venue->id);
                    }
                    $attendance = $event->competitions[0]->attendance;
                    if(!$shallow) {
                        $game = \CFBData\ESPNGame::get($event->competitions[0]->id);
                    }
                    else{
                        $game = new Game();
                    }
                    $game->setAttendance($attendance);
                    $game->setVenue($venue);

                    $games[] = $game;
                }
                return $games;
            }
            else{
                return false;
            }
    }
}