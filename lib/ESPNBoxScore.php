<?php
namespace CFBData;

use CFBData\Object\BoxScore;
use CFBData\Object\BoxScoreTeamStats;

class ESPNBoxScore
{
    const BASE_URL = 'http://cdn.espn.com/core/college-football/boxscore';

    static function get($gameId) : BoxScore
    {
        $query = [
            'gameId' => $gameId,
            'xhr' => 1,
            'render' => 'false',
            'userab' => 18
        ];

        $uri = sprintf("%s?%s", self::BASE_URL, http_build_query($query));
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $uri);
        if ($res->getStatusCode() == 200) {
            $response = json_decode($res->getBody());
            $game = $response->gamepackageJSON;

            $boxScore = new BoxScore();

            $boxScore->setGameId($response->gameId);

            foreach($game->header->competitions[0]->competitors as $competitor)
            {
                if($competitor->homeAway == 'home')
                {
                    $boxScore->setHomeTeamId($competitor->team->id);
                }
                else{
                    $boxScore->setAwayTeamId($competitor->team->id);
                }
            }

            foreach($game->boxscore->teams as $teamStats)
            {
                $bsts = new BoxScoreTeamStats();
                foreach($teamStats->statistics as $stat)
                {
                    switch($stat->name)
                    {
                        case "firstDowns":
                            $bsts->setFirstDowns($stat->displayValue);
                            break;
                        case "thirdDownEff":
                            $val = self::getSuccessAttemptStat($stat->displayValue);
                            $bsts->setThirdDownAttempts($val->attempt);
                            $bsts->setThirdDownConversions($val->success);
                            break;
                        case "fourthDownEff":
                            $val = self::getSuccessAttemptStat($stat->displayValue);
                            $bsts->setFourthDownAttempts($val->attempt);
                            $bsts->setFourthDownConversions($val->success);
                            break;
                        case "totalYards":
                            $bsts->setTotalYards($stat->displayValue);
                            break;
                        case "netPassingYards":
                            $bsts->setNetPassingYards($stat->displayValue);
                            break;
                        case "completionAttempts":
                            $val = self::getSuccessAttemptStat($stat->displayValue);
                            $bsts->setPassCompletions($val->success);
                            $bsts->setPassAttempts($val->attempt);
                            break;
                        case "yardsPerPass":
                            $bsts->setYardsPerPass($stat->displayValue);
                            break;
                        case "rushingYards":
                            $bsts->setRushingYards($stat->displayValue);
                            break;
                        case "rushingAttempts":
                            $bsts->setRushingAttempts($stat->displayValue);
                            break;
                        case "yardsPerRushAttempt":
                            $bsts->setYardsPerRushAttempt($stat->displayValue);
                            break;
                        case "totalPenaltiesYards":
                            $val = self::getSuccessAttemptStat($stat->displayValue);
                            $bsts->setPenalties($val->success);
                            $bsts->setPenaltyYards($val->attempt);
                            break;
                        case "turnovers":
                            $bsts->setTurnovers($stat->displayValue);
                            break;
                        case "fumblesLost":
                            $bsts->setFumblesLost($stat->displayValue);
                            break;
                        case "interceptions":
                            $bsts->setInterceptionsThrown($stat->displayValue);
                            break;
                        case "possessionTime":
                            $val = self::timeToSeconds($stat->displayValue);
                            $bsts->setPossessionTime($val);
                            break;
                        default:
                            throw new \Exception("Found an unknown stat {$stat->name}");
                    }
                }
                if($teamStats->team->id == $boxScore->getHomeTeamId())
                {
                    $boxScore->setHomeStats($bsts);
                }
                else{
                    $boxScore->setAwayStats($bsts);
                }
            }

            foreach($game->boxscore->players as $teamStats)
            {
                if($teamStats->team->id == $boxScore->getHomeTeamId())
                {
                    $bsts = $boxScore->getHomeStats();
                }
                else{
                    $bsts = $boxScore->getAwayStats();
                }

                foreach($teamStats->statistics as $stat)
                {
                    $category = $stat->name;

                    if(count($stat->labels) != count($stat->totals))
                    {
                        $stat->totals = array_fill(0, count($stat->labels), 0);
                    }

                    $values = array_combine($stat->labels, $stat->totals);

                    self::handleStats($bsts, $category, $values);
                }
            }

            return $boxScore;
        }
        else{
            return false;
        }
    }


    private static function getSuccessAttemptStat($stat, $separator = "-")
    {
        $result = new \stdClass();
        $parts = explode($separator, $stat);
        $result->success = $parts[0];
        $result->attempt = $parts[1];
        return $result;
    }

    private static function timeToSeconds($time)
    {
        $parts = explode(":", $time);
        $seconds = $parts[0]*60+$parts[1];
        return $seconds;
    }

    private static function handleStats(BoxScoreTeamStats $bsts, $category, $values)
    {
        if($category == "passing")
        {
            foreach($values as $k => $v)
            {
                switch($k)
                {
                    case "TD":
                    $bsts->setPassingTouchdowns($v);
                        break;
                    default:
                        break;
                }
            }
        }
        if($category == "rushing")
        {
            foreach($values as $k => $v)
            {
                switch($k)
                {
                    case "TD":
                        $bsts->setRushingTouchdowns($v);
                        break;
                    case "LONG":
                        $bsts->setRushingLong($v);
                        break;
                    default:
                        break;
                }
            }
        }
        if($category == "receiving")
        {
            foreach($values as $k => $v)
            {
                switch($k)
                {
                    case "TD":
                        $bsts->setReceivingTouchdowns($v);
                        break;
                    case "LONG":
                        $bsts->setReceivingLong($v);
                        break;
                    case "YDS":
                        $bsts->setReceivingYards($v);
                        break;
                    case "AVG":
                        $bsts->setYardsPerReception($v);
                        break;
                    case "REC":
                        $bsts->setReceptions($v);
                        break;
                    default:
                        break;
                }
            }
        }
        if($category == "interceptions")
        {
            foreach($values as $k => $v)
            {
                switch($k)
                {
                    case "TD":
                        $bsts->setInterceptionTouchdowns($v);
                        break;
                    case "YDS":
                        $bsts->setInterceptionYards($v);
                        break;
                    case "INT":
                        $bsts->setInterceptions($v);
                        break;
                    default:
                        break;
                }
            }
        }
        if($category == "kickReturns")
        {
            foreach($values as $k => $v)
            {
                switch($k)
                {
                    case "TD":
                        $bsts->setKickReturnTouchdowns($v);
                        break;
                    case "LONG":
                        $bsts->setKickReturnLong($v);
                        break;
                    case "YDS":
                        $bsts->setKickReturnYards($v);
                        break;
                    case "AVG":
                        $bsts->setYardsPerKickReturn($v);
                        break;
                    case "NO":
                        $bsts->setKickReturns($v);
                        break;
                    default:
                        break;
                }
            }
        }
        if($category == "puntReturns")
        {
            foreach($values as $k => $v)
            {
                switch($k)
                {
                    case "TD":
                        $bsts->setPuntReturnTouchdowns($v);
                        break;
                    case "LONG":
                        $bsts->setPuntReturnLong($v);
                        break;
                    case "YDS":
                        $bsts->setPuntReturnYards($v);
                        break;
                    case "AVG":
                        $bsts->setYardsPerPuntReturn($v);
                        break;
                    case "NO":
                        $bsts->setPuntReturns($v);
                        break;
                    default:
                        break;
                }
            }
        }
        if($category == "kicking")
        {
            foreach($values as $k => $v)
            {
                switch($k)
                {
                    case "FG":
                        $val = self::getSuccessAttemptStat($v, "/");
                        $bsts->setFieldGoalAttempts($val->attempt);
                        $bsts->setFieldGoalMakes($val->success);
                        break;
                    case "XP":
                        $val = self::getSuccessAttemptStat($v, "/");
                        $bsts->setExtraPointAttempts($val->attempt);
                        $bsts->setExtraPointMakes($val->success);
                        break;
                    case "LONG":
                        $bsts->setFieldGoalLong($v);
                        break;
                    case "PTS":
                        $bsts->setFieldGoalPoints($v);
                        break;
                    default:
                        break;
                }
            }
        }
        if($category == "punting")
        {
            foreach($values as $k => $v)
            {
                switch($k)
                {
                    case "NO":
                        $bsts->setPunts($v);
                        break;
                    case "YDS":
                        $bsts->setPuntYards($v);
                        break;
                    case "AVG":
                        $bsts->setYardsPerPunt($v);
                        break;
                    case "TB":
                        $bsts->setPuntTouchBacks($v);
                        break;
                    case "In 20":
                        $bsts->setPuntsInside20($v);
                        break;
                    case "LONG":
                        $bsts->setPuntLong($v);
                        break;
                    default:
                        break;
                }
            }
        }
        if($category == "fumbles")
        {
            foreach($values as $k => $v)
            {
                switch($k)
                {
                    case "FUM":
                        $bsts->setFumbles($v);
                        break;
                    case "REC":
                        $bsts->setFumblesRecovered($v);
                        break;
                    default:
                        break;
                }
            }
        }
        if($category == "defensive")
        {
            foreach($values as $k => $v)
            {
                switch($k)
                {
                    case "TOT":
                        $bsts->setTackles($v);
                        break;
                    case "SOLO":
                        $bsts->setSoloTackles($v);
                        break;
                    case "SACK":
                        $bsts->setSacks($v);
                        break;
                    case "TFL":
                        $bsts->setTacklesForLoss($v);
                        break;
                    case "PD":
                        $bsts->setPassesDefended($v);
                        break;
                    case "QB HUR":
                        $bsts->setQuarterbackHurries($v);
                        break;
                    case "TD":
                        $bsts->setDefensiveTouchdowns($v);
                        break;
                    default:
                        break;
                }
            }
        }
    }
}