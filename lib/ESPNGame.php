<?php
namespace CFBData;

use CFBData\Object\Broadcast;
use CFBData\Object\Drive;
use CFBData\Object\Game;
use CFBData\Object\Play;
use CFBData\Object\Team;

class ESPNGame
{
    const BASE_URL = 'http://cdn.espn.com/core/college-football/playbyplay';

    static function get($gameId) : Game
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

            $gameObj = new Game();

            $gameObj->setDate($game->competitions[0]->date);
            $gameObj->setNeutralSite($game->competitions[0]->neutralSite);
            $gameObj->setId($game->competitions[0]->id);
            $gameObj->setConferenceCompetition($game->competitions[0]->conferenceCompetition);

            foreach($game->competitions[0]->broadcasts as $broadcast)
            {
                $broadcastObj = new Broadcast();
                $broadcastObj->setLanguage($broadcast->lang);
                $broadcastObj->setMarket($broadcast->market->type);
                $broadcastObj->setNetwork($broadcast->media->shortName);
                $broadcastObj->setMediatype($broadcast->type->shortName);
                $broadcastObj->setRegion($broadcast->region);
                $gameObj->addBroadcast($broadcastObj);
            }

            foreach($game->competitions[0]->competitors as $competitor)
            {
                $team = new Team();
                $team->setAbbreviation($competitor->team->abbreviation);
                $team->setColor($competitor->team->color);
                $team->setDisplayName($competitor->team->displayName);
                $team->setHomeAway($competitor->homeAway);

                if($competitor->homeAway == 'home')
                {
                    $gameObj->setHomeScore($competitor->score);
                }
                else{
                    $gameObj->setAwayScore($competitor->score);
                }

                $team->setId($competitor->id);
                if(!isset($rank))
                {
                    $team->setRank(null);
                }
                else {
                    $team->setRank($competitor->rank);
                }

                $gameObj->addTeam($team);
            }

            foreach($game->drives->previous as $drive)
            {
                $driveObj = new Drive();
                $driveObj->setId($drive->id);


                foreach($drive->plays as $play)
                {
                    $playObj = new Play();
                    $playObj->setStartingYardLine($play->start->yardLine);
                    $playObj->setEndingYardLine($play->end->yardLine);
                    $playObj->setAwayScore($play->awayScore);
                    $playObj->setClock($play->clock->displayValue);
                    $playObj->setEndingDistance($play->end->distance);
                    $playObj->setEndingDown($play->end->down);
                    if(!isset($play->end->team))
                    {
                        $playObj->setEndingTeamPossessingBall($play->start->team->id);
                    }
                    else {
                        $playObj->setEndingTeamPossessingBall($play->end->team->id);
                    }
                    $playObj->setEndingYardsToEndZone($play->end->yardsToEndzone);
                    $playObj->setHomeScore($play->homeScore);
                    $playObj->setPlayId($play->id);
                    $playObj->setStartingDistance($play->start->distance);
                    $playObj->setStartingDown($play->start->down);
                    $playObj->setStartingTeamPossesingBall($play->start->team->id);
                    $playObj->setYardsToEndZone($play->start->yardsToEndzone);

                    if(isset($play->type))
                    {
                        if(isset($play->type->abbreviation))
                        {
                            $playObj->setType($play->type->abbreviation);
                        }
                        $playObj->setTypeId($play->type->id);
                        $playObj->setTypeText($play->type->text);
                    }
                    if(isset($play->wallclock)) {
                        $playObj->setWallclockTime($play->wallclock);
                    }
                    $playObj->setText($play->text);

                    $driveObj->addPlay($playObj);
                }



                if(!isset($drive->result))
                {
                    $driveObj->setResult($drive->plays[count($drive->plays)-1]->type->text);
                }
                else {
                    $driveObj->setResult($drive->result);
                }

                $driveObj->setTimeElapsed($drive->timeElapsed->displayValue);
                if(isset($drive->description)) {
                    $driveObj->setDescription($drive->description);
                }
                if(!isset($drive->end))
                {
                    $driveObj->setEndingClockTime("00:00");
                    $driveObj->setEndingPeriodNumber($drive->start->period->number);
                    $driveObj->setEndingPeriodType($drive->start->period->type);
                }
                else {
                    $driveObj->setEndingPeriodNumber($drive->end->period->number);
                    if (!isset($drive->end->clock)) {
                        $driveObj->setEndingClockTime("00:00");
                    } else {
                        $driveObj->setEndingClockTime($drive->end->clock->displayValue);
                    }
                    $driveObj->setEndingYardLine($drive->end->yardLine);
                    $driveObj->setEndingPeriodType($drive->end->period->type);
                }
                $driveObj->setOffensivePlays($drive->offensivePlays);
                $driveObj->setResultsInScore($drive->isScore);
                if(!isset($drive->start->clock))
                {
                    $driveObj->setStartingClockTime("00:00");
                }
                else {
                    $driveObj->setStartingClockTime($drive->start->clock->displayValue);
                }
                $driveObj->setStartingPeriodType($drive->start->period->type);
                $driveObj->setStartingPeriodNumber($drive->start->period->number);
                $driveObj->setStartingYardLine($drive->start->yardLine);
                $driveObj->setOffensiveTeamName($drive->team->displayName);

                $gameObj->addDrive($driveObj);
            }

            return $gameObj;
        }
        else{
            return false;
        }
    }
}