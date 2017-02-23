<?php
namespace CFBData;

use CFBData\Object\Game;
use CFBData\Object\Venue;
use CFBData\Object\Broadcast;
use CFBData\Object\Team;

class ESPNScoreboard
{
    const BASE_URL = 'http://cdn.espn.com/core/college-football/scoreboard/_/group/%s/year/%s/seasontype/%s/week/%s?xhr=1&render=true&device=desktop';

    static function getWeeks($year)
    {
        $uri = sprintf(self::BASE_URL, 80, $year, 1, 2);
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $uri);

        if($res->getStatusCode() == 200)
        {
            $scoreBoard = json_decode($res->getBody());
            $scoreBoard = $scoreBoard->content->sbData;

            $weeks = [];
            foreach($scoreBoard->leagues[0]->calendar as $period)
            {
                $weeks = array_merge($weeks, $period->entries);
            }

            return $weeks;
        }
    }

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
                        $game->setDate($event->competitions[0]->date);
                        $game->setNeutralSite($event->competitions[0]->neutralSite);
                        $game->setId($event->competitions[0]->id);
                        $game->setConferenceCompetition($event->competitions[0]->conferenceCompetition);

                        foreach($event->competitions[0]->geoBroadcasts as $broadcast)
                        {
                            $broadcastObj = new Broadcast();
                            $broadcastObj->setLanguage($broadcast->lang);
                            $broadcastObj->setMarket($broadcast->market->type);
                            $broadcastObj->setNetwork($broadcast->media->shortName);
                            $broadcastObj->setMediatype($broadcast->type->shortName);
                            $broadcastObj->setRegion($broadcast->region);
                            $game->addBroadcast($broadcastObj);
                        }

                        foreach($event->competitions[0]->competitors as $competitor)
                        {
                            $team = new Team();
                            $team->setAbbreviation($competitor->team->abbreviation);
                            if(isset($competitor->team->color)) {
                                $team->setColor($competitor->team->color);
                            }
                            $team->setDisplayName($competitor->team->displayName);
                            $team->setHomeAway($competitor->homeAway);

                            if($competitor->homeAway == 'home')
                            {
                                $game->setHomeScore($competitor->score);
                            }
                            else{
                                $game->setAwayScore($competitor->score);
                            }

                            $team->setId($competitor->id);
                            if(!isset($rank))
                            {
                                $team->setRank(null);
                            }
                            else {
                                $team->setRank($competitor->rank);
                            }

                            $game->addTeam($team);
                        }
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