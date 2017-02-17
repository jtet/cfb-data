<?php
namespace CFBData;

use CFBData\Object\Game;
use CFBData\Object\Venue;

class ESPNScoreboard
{
    const BASE_URL = 'http://cdn.espn.com/core/college-football/scoreboard/_/group/%s/year/%s/seasontype/%s/week/%s?xhr=1&render=true&device=desktop';

    static function get($year, $week, $groups = 80, $season_type = 2, $shallow = false)
    {
            $uri = sprintf(self::BASE_URL, $groups, $year, $season_type, $week);
            $client = new \GuzzleHttp\Client();
            $res = $client->request('GET', $uri);

            if($res->getStatusCode() == 200)
            {
                $scoreBoard = json_decode($res->getBody());
                $scoreBoard = $scoreBoard->content->sbData;
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

                        if(isset($event->competitions[0]->venue->address->state)) {
                            $venue->setState($event->competitions[0]->venue->address->state);
                        }
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