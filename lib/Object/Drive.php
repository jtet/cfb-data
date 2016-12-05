<?php
namespace CFBData\Object;

class Drive
{
    protected $id;

    protected $offensivePlays;

    protected $resultsInScore;

    protected $startingClockTime;

    protected $startingPeriodNumber;

    protected $startingPeriodType;

    protected $startingYardLine;

    protected $endingPeriodNumber;

    protected $endingPeriodType;

    protected $endingYardLine;

    protected $endingClockTime;

    protected $description;

    protected $result;

    protected $plays = [];

    protected $offensiveTeamName;

    protected $timeElapsed;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getOffensivePlays()
    {
        return $this->offensivePlays;
    }

    /**
     * @param mixed $offensivePlays
     */
    public function setOffensivePlays($offensivePlays)
    {
        $this->offensivePlays = $offensivePlays;
    }

    /**
     * @return mixed
     */
    public function getResultsInScore()
    {
        return $this->resultsInScore;
    }

    /**
     * @param mixed $resultsInScore
     */
    public function setResultsInScore($resultsInScore)
    {
        $this->resultsInScore = $resultsInScore;
    }

    /**
     * @return mixed
     */
    public function getStartingClockTime()
    {
        return $this->startingClockTime;
    }

    /**
     * @param mixed $startingClockTime
     */
    public function setStartingClockTime($startingClockTime)
    {
        $this->startingClockTime = $startingClockTime;
    }

    /**
     * @return mixed
     */
    public function getStartingPeriodNumber()
    {
        return $this->startingPeriodNumber;
    }

    /**
     * @param mixed $startingPeriodNumber
     */
    public function setStartingPeriodNumber($startingPeriodNumber)
    {
        $this->startingPeriodNumber = $startingPeriodNumber;
    }

    /**
     * @return mixed
     */
    public function getStartingPeriodType()
    {
        return $this->startingPeriodType;
    }

    /**
     * @param mixed $startingPeriodType
     */
    public function setStartingPeriodType($startingPeriodType)
    {
        $this->startingPeriodType = $startingPeriodType;
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
    public function getEndingPeriodNumber()
    {
        return $this->endingPeriodNumber;
    }

    /**
     * @param mixed $endingPeriodNumber
     */
    public function setEndingPeriodNumber($endingPeriodNumber)
    {
        $this->endingPeriodNumber = $endingPeriodNumber;
    }

    /**
     * @return mixed
     */
    public function getEndingPeriodType()
    {
        return $this->endingPeriodType;
    }

    /**
     * @param mixed $endingPeriodType
     */
    public function setEndingPeriodType($endingPeriodType)
    {
        $this->endingPeriodType = $endingPeriodType;
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
    public function getEndingClockTime()
    {
        return $this->endingClockTime;
    }

    /**
     * @param mixed $endingClockTime
     */
    public function setEndingClockTime($endingClockTime)
    {
        $this->endingClockTime = $endingClockTime;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getPlays()
    {
        return $this->plays;
    }

    /**
     * @param mixed $plays
     */
    public function addPlay($play)
    {
        $this->plays[] = $play;
    }

    /**
     * @return mixed
     */
    public function getOffensiveTeamName()
    {
        return $this->offensiveTeamName;
    }

    /**
     * @param mixed $offensiveTeamName
     */
    public function setOffensiveTeamName($offensiveTeamName)
    {
        $this->offensiveTeamName = $offensiveTeamName;
    }

    /**
     * @return mixed
     */
    public function getTimeElapsed()
    {
        return $this->timeElapsed;
    }

    /**
     * @param mixed $timeElapsed
     */
    public function setTimeElapsed($timeElapsed)
    {
        $this->timeElapsed = $timeElapsed;
    }


}