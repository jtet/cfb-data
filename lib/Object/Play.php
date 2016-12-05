<?php
namespace CFBData\Object;

class Play
{
    protected $awayScore;
    protected $homeScore;
    protected $clock;
    protected $playId;
    protected $scoringPlay;
    protected $startingDown;
    protected $startingDistance;
    protected $startingYardLine;
    protected $yardsToEndZone;
    protected $type;
    protected $typeId;
    protected $typeText;
    protected $wallclockTime;
    protected $startingTeamPossesingBall;
    protected $endingDistance;
    protected $endingDown;
    protected $endingTeamPossessingBall;
    protected $endingYardLine;
    protected $endingYardsToEndZone;
    protected $text;

    /**
     * @return mixed
     */
    public function getAwayScore()
    {
        return $this->awayScore;
    }

    /**
     * @param mixed $awayScore
     */
    public function setAwayScore($awayScore)
    {
        $this->awayScore = $awayScore;
    }

    /**
     * @return mixed
     */
    public function getHomeScore()
    {
        return $this->homeScore;
    }

    /**
     * @param mixed $homeScore
     */
    public function setHomeScore($homeScore)
    {
        $this->homeScore = $homeScore;
    }

    /**
     * @return mixed
     */
    public function getClock()
    {
        return $this->clock;
    }

    /**
     * @param mixed $clock
     */
    public function setClock($clock)
    {
        $this->clock = $clock;
    }

    /**
     * @return mixed
     */
    public function getPlayId()
    {
        return $this->playId;
    }

    /**
     * @param mixed $playId
     */
    public function setPlayId($playId)
    {
        $this->playId = $playId;
    }

    /**
     * @return mixed
     */
    public function getScoringPlay()
    {
        return $this->scoringPlay;
    }

    /**
     * @param mixed $scoringPlay
     */
    public function setScoringPlay($scoringPlay)
    {
        $this->scoringPlay = $scoringPlay;
    }

    /**
     * @return mixed
     */
    public function getStartingDown()
    {
        return $this->startingDown;
    }

    /**
     * @param mixed $startingDown
     */
    public function setStartingDown($startingDown)
    {
        $this->startingDown = $startingDown;
    }

    /**
     * @return mixed
     */
    public function getStartingDistance()
    {
        return $this->startingDistance;
    }

    /**
     * @param mixed $startingDistance
     */
    public function setStartingDistance($startingDistance)
    {
        $this->startingDistance = $startingDistance;
    }

    /**
     * @return mixed
     */
    public function getStartingYardLine()
    {
        return $this->startingYardLine;
    }

    /**
     * @param mixed $startingYardLine
     */
    public function setStartingYardLine($startingYardLine)
    {
        $this->startingYardLine = $startingYardLine;
    }

    /**
     * @return mixed
     */
    public function getYardsToEndZone()
    {
        return $this->yardsToEndZone;
    }

    /**
     * @param mixed $yardsToEndZone
     */
    public function setYardsToEndZone($yardsToEndZone)
    {
        $this->yardsToEndZone = $yardsToEndZone;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param mixed $typeId
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
    }

    /**
     * @return mixed
     */
    public function getTypeText()
    {
        return $this->typeText;
    }

    /**
     * @param mixed $typeText
     */
    public function setTypeText($typeText)
    {
        $this->typeText = $typeText;
    }

    /**
     * @return mixed
     */
    public function getWallclockTime()
    {
        return $this->wallclockTime;
    }

    /**
     * @param mixed $wallclockTime
     */
    public function setWallclockTime($wallclockTime)
    {
        $this->wallclockTime = $wallclockTime;
    }

    /**
     * @return mixed
     */
    public function getStartingTeamPossesingBall()
    {
        return $this->startingTeamPossesingBall;
    }

    /**
     * @param mixed $startingTeamPossesingBall
     */
    public function setStartingTeamPossesingBall($startingTeamPossesingBall)
    {
        $this->startingTeamPossesingBall = $startingTeamPossesingBall;
    }

    /**
     * @return mixed
     */
    public function getEndingDistance()
    {
        return $this->endingDistance;
    }

    /**
     * @param mixed $endingDistance
     */
    public function setEndingDistance($endingDistance)
    {
        $this->endingDistance = $endingDistance;
    }

    /**
     * @return mixed
     */
    public function getEndingDown()
    {
        return $this->endingDown;
    }

    /**
     * @param mixed $endingDown
     */
    public function setEndingDown($endingDown)
    {
        $this->endingDown = $endingDown;
    }

    /**
     * @return mixed
     */
    public function getEndingTeamPossessingBall()
    {
        return $this->endingTeamPossessingBall;
    }

    /**
     * @param mixed $endingTeamPossessingBall
     */
    public function setEndingTeamPossessingBall($endingTeamPossessingBall)
    {
        $this->endingTeamPossessingBall = $endingTeamPossessingBall;
    }

    /**
     * @return mixed
     */
    public function getEndingYardLine()
    {
        return $this->endingYardLine;
    }

    /**
     * @param mixed $endingYardLine
     */
    public function setEndingYardLine($endingYardLine)
    {
        $this->endingYardLine = $endingYardLine;
    }

    /**
     * @return mixed
     */
    public function getEndingYardsToEndZone()
    {
        return $this->endingYardsToEndZone;
    }

    /**
     * @param mixed $endingYardsToEndZone
     */
    public function setEndingYardsToEndZone($endingYardsToEndZone)
    {
        $this->endingYardsToEndZone = $endingYardsToEndZone;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }



}