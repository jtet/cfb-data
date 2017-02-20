<?php
namespace CFBData\Object;


class Pick
{
    private $providerId;
    private $providerName;
    private $overUnder;
    private $spread;
    private $favoriteTeamId;
    private $homeTeamId;
    private $awayTeamId;
    private $homeMoneyLine;
    private $awayMoneyLine;

    /**
     * @return mixed
     */
    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * @param mixed $providerId
     */
    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;
    }

    /**
     * @return mixed
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * @param mixed $providerName
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;
    }

    /**
     * @return mixed
     */
    public function getOverUnder()
    {
        return $this->overUnder;
    }

    /**
     * @param mixed $overUnder
     */
    public function setOverUnder($overUnder)
    {
        $this->overUnder = $overUnder;
    }

    /**
     * @return mixed
     */
    public function getSpread()
    {
        return $this->spread;
    }

    /**
     * @param mixed $spread
     */
    public function setSpread($spread)
    {
        $this->spread = $spread;
    }

    /**
     * @return mixed
     */
    public function getFavoriteTeamId()
    {
        return $this->favoriteTeamId;
    }

    /**
     * @param mixed $favoriteTeamId
     */
    public function setFavoriteTeamId($favoriteTeamId)
    {
        $this->favoriteTeamId = $favoriteTeamId;
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

    /**
     * @return mixed
     */
    public function getHomeMoneyLine()
    {
        return $this->homeMoneyLine;
    }

    /**
     * @param mixed $homeMoneyLine
     */
    public function setHomeMoneyLine($homeMoneyLine)
    {
        $this->homeMoneyLine = $homeMoneyLine;
    }

    /**
     * @return mixed
     */
    public function getAwayMoneyLine()
    {
        return $this->awayMoneyLine;
    }

    /**
     * @param mixed $awayMoneyLine
     */
    public function setAwayMoneyLine($awayMoneyLine)
    {
        $this->awayMoneyLine = $awayMoneyLine;
    }

}