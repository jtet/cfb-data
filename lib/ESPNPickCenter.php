<?php
namespace CFBData;

use CFBData\Object\Pick;

class ESPNPickCenter
{
    const BASE_URL = 'http://cdn.espn.com/core/college-football/game';

    static function get($gameId)
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
            $result =  json_decode($res->getBody());
            $picks = $result->gamepackageJSON->pickcenter;

            $resultPicks = [];
            foreach($picks as $dataPick)
            {
                $pick = new Pick();
                $pick->setProviderId($dataPick->provider->id);
                $pick->setProviderName($dataPick->provider->name);
                if($dataPick->awayTeamOdds->favorite)
                {
                    $pick->setFavoriteTeamId($dataPick->awayTeamOdds->teamId);
                }
                else{
                    $pick->setFavoriteTeamId($dataPick->homeTeamOdds->teamId);
                }
                $pick->setHomeTeamId($dataPick->homeTeamOdds->teamId);
                $pick->setAwayTeamId($dataPick->awayTeamOdds->teamId);
                $pick->setAwayMoneyLine($dataPick->awayTeamOdds->moneyLine);
                $pick->setHomeMoneyLine($dataPick->homeTeamOdds->moneyLine);
                $pick->setOverUnder($dataPick->overUnder);
                $pick->setSpread($dataPick->spread);

                $resultPicks[] = $pick;

            }
            return $resultPicks;
        } else {
            return false;
        }
    }
}