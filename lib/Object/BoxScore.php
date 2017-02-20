<?php
namespace CFBData\Object;

class BoxScore
{
    private $gameId;

    private $homeStats;

    private $awayStats;

    private $homeTeamId;

    private $awayTeamId;

    /**
     * @return mixed
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @param mixed $gameId
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    }

    /**
     * @return mixed
     */
    public function getHomeStats()
    {
        return $this->homeStats;
    }

    /**
     * @param mixed $homeStats
     */
    public function setHomeStats($homeStats)
    {
        $this->homeStats = $homeStats;
    }

    /**
     * @return mixed
     */
    public function getAwayStats()
    {
        return $this->awayStats;
    }

    /**
     * @param mixed $awayStats
     */
    public function setAwayStats($awayStats)
    {
        $this->awayStats = $awayStats;
    }

    /**
     * @return mixed
     */
    public function getHomeTeamId()
    {
        return $this->homeTeamId;
    }

    /**
     * @param mixed $homeTeamId
     */
    public function setHomeTeamId($homeTeamId)
    {
        $this->homeTeamId = $homeTeamId;
    }

    /**
     * @return mixed
     */
    public function getAwayTeamId()
    {
        return $this->awayTeamId;
    }

    /**
     * @param mixed $awayTeamId
     */
    public function setAwayTeamId($awayTeamId)
    {
        $this->awayTeamId = $awayTeamId;
    }


}