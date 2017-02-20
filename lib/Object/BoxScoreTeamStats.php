<?php
namespace CFBData\Object;

class BoxScoreTeamStats
{
    private $firstDowns;

    private $thirdDownAttempts;

    private $thirdDownConversions;

    private $fourthDownAttempts;

    private $fourthDownConversions;

    private $totalYards;

    private $netPassingYards;

    private $passAttempts;

    private $passCompletions;

    private $yardsPerPass;

    private $rushingYards;

    private $rushingAttempts;

    private $yardsPerRushAttempt;

    private $penalties;

    private $penaltyYards;

    private $turnovers;

    private $fumblesLost;

    private $interceptionsThrown;

    private $possessionTime;

    private $passingTouchdowns;

    private $rushingLong;

    private $rushingTouchdowns;

    private $receptions;

    private $receivingYards;

    private $yardsPerReception;

    private $receivingTouchdowns;

    private $receivingLong;

    private $interceptions;

    private $interceptionYards;

    private $interceptionTouchdowns;

    private $kickReturns;

    private $kickReturnYards;

    private $yardsPerKickReturn;

    private $kickReturnLong;

    private $kickReturnTouchdowns;

    private $puntReturns;

    private $puntReturnYards;

    private $yardsPerPuntReturn;

    private $puntReturnLong;

    private $puntReturnTouchdowns;

    private $fieldGoalAttempts;

    private $fieldGoalMakes;

    private $fieldGoalLong;

    private $fieldGoalPoints;

    private $extraPointAttempts;

    private $extraPointMakes;

    private $punts;

    private $puntYards;

    private $yardsPerPunt;

    private $puntTouchBacks;

    private $puntsInside20;

    private $puntLong;

    private $fumbles;

    private $fumblesRecovered;

    private $tackles;

    private $soloTackles;

    private $sacks;

    private $tacklesForLoss;

    private $passesDefended;

    private $quarterbackHurries;

    private $defensiveTouchdowns;

    /**
     * @return mixed
     */
    public function getFirstDowns()
    {
        return $this->firstDowns;
    }

    /**
     * @param mixed $firstDowns
     */
    public function setFirstDowns($firstDowns)
    {
        $this->firstDowns = $firstDowns;
    }

    /**
     * @return mixed
     */
    public function getThirdDownAttempts()
    {
        return $this->thirdDownAttempts;
    }

    /**
     * @param mixed $thirdDownAttempts
     */
    public function setThirdDownAttempts($thirdDownAttempts)
    {
        $this->thirdDownAttempts = $thirdDownAttempts;
    }

    /**
     * @return mixed
     */
    public function getThirdDownConversions()
    {
        return $this->thirdDownConversions;
    }

    /**
     * @param mixed $thirdDownConversions
     */
    public function setThirdDownConversions($thirdDownConversions)
    {
        $this->thirdDownConversions = $thirdDownConversions;
    }

    /**
     * @return mixed
     */
    public function getFourthDownAttempts()
    {
        return $this->fourthDownAttempts;
    }

    /**
     * @param mixed $fourthDownAttempts
     */
    public function setFourthDownAttempts($fourthDownAttempts)
    {
        $this->fourthDownAttempts = $fourthDownAttempts;
    }

    /**
     * @return mixed
     */
    public function getFourthDownConversions()
    {
        return $this->fourthDownConversions;
    }

    /**
     * @param mixed $fourthDownConversions
     */
    public function setFourthDownConversions($fourthDownConversions)
    {
        $this->fourthDownConversions = $fourthDownConversions;
    }

    /**
     * @return mixed
     */
    public function getTotalYards()
    {
        return $this->totalYards;
    }

    /**
     * @param mixed $totalYards
     */
    public function setTotalYards($totalYards)
    {
        $this->totalYards = $totalYards;
    }

    /**
     * @return mixed
     */
    public function getNetPassingYards()
    {
        return $this->netPassingYards;
    }

    /**
     * @param mixed $netPassingYards
     */
    public function setNetPassingYards($netPassingYards)
    {
        $this->netPassingYards = $netPassingYards;
    }

    /**
     * @return mixed
     */
    public function getPassAttempts()
    {
        return $this->passAttempts;
    }

    /**
     * @param mixed $passAttempts
     */
    public function setPassAttempts($passAttempts)
    {
        $this->passAttempts = $passAttempts;
    }

    /**
     * @return mixed
     */
    public function getPassCompletions()
    {
        return $this->passCompletions;
    }

    /**
     * @param mixed $passCompletions
     */
    public function setPassCompletions($passCompletions)
    {
        $this->passCompletions = $passCompletions;
    }

    /**
     * @return mixed
     */
    public function getYardsPerPass()
    {
        return $this->yardsPerPass;
    }

    /**
     * @param mixed $yardsPerPass
     */
    public function setYardsPerPass($yardsPerPass)
    {
        $this->yardsPerPass = $yardsPerPass;
    }

    /**
     * @return mixed
     */
    public function getRushingYards()
    {
        return $this->rushingYards;
    }

    /**
     * @param mixed $rushingYards
     */
    public function setRushingYards($rushingYards)
    {
        $this->rushingYards = $rushingYards;
    }

    /**
     * @return mixed
     */
    public function getRushingAttempts()
    {
        return $this->rushingAttempts;
    }

    /**
     * @param mixed $rushingAttempts
     */
    public function setRushingAttempts($rushingAttempts)
    {
        $this->rushingAttempts = $rushingAttempts;
    }

    /**
     * @return mixed
     */
    public function getYardsPerRushAttempt()
    {
        return $this->yardsPerRushAttempt;
    }

    /**
     * @param mixed $yardsPerRushAttempt
     */
    public function setYardsPerRushAttempt($yardsPerRushAttempt)
    {
        $this->yardsPerRushAttempt = $yardsPerRushAttempt;
    }

    /**
     * @return mixed
     */
    public function getPenalties()
    {
        return $this->penalties;
    }

    /**
     * @param mixed $penalties
     */
    public function setPenalties($penalties)
    {
        $this->penalties = $penalties;
    }

    /**
     * @return mixed
     */
    public function getPenaltyYards()
    {
        return $this->penaltyYards;
    }

    /**
     * @param mixed $penaltyYards
     */
    public function setPenaltyYards($penaltyYards)
    {
        $this->penaltyYards = $penaltyYards;
    }

    /**
     * @return mixed
     */
    public function getTurnovers()
    {
        return $this->turnovers;
    }

    /**
     * @param mixed $turnovers
     */
    public function setTurnovers($turnovers)
    {
        $this->turnovers = $turnovers;
    }

    /**
     * @return mixed
     */
    public function getFumblesLost()
    {
        return $this->fumblesLost;
    }

    /**
     * @param mixed $fumblesLost
     */
    public function setFumblesLost($fumblesLost)
    {
        $this->fumblesLost = $fumblesLost;
    }

    /**
     * @return mixed
     */
    public function getInterceptionsThrown()
    {
        return $this->interceptionsThrown;
    }

    /**
     * @param mixed $interceptionsThrown
     */
    public function setInterceptionsThrown($interceptionsThrown)
    {
        $this->interceptionsThrown = $interceptionsThrown;
    }

    /**
     * @return mixed
     */
    public function getPossessionTime()
    {
        return $this->possessionTime;
    }

    /**
     * @param mixed $possessionTime
     */
    public function setPossessionTime($possessionTime)
    {
        $this->possessionTime = $possessionTime;
    }

    /**
     * @return mixed
     */
    public function getPassingTouchdowns()
    {
        return $this->passingTouchdowns;
    }

    /**
     * @param mixed $passingTouchdowns
     */
    public function setPassingTouchdowns($passingTouchdowns)
    {
        $this->passingTouchdowns = $passingTouchdowns;
    }

    /**
     * @return mixed
     */
    public function getRushingLong()
    {
        return $this->rushingLong;
    }

    /**
     * @param mixed $rushingLong
     */
    public function setRushingLong($rushingLong)
    {
        $this->rushingLong = $rushingLong;
    }

    /**
     * @return mixed
     */
    public function getRushingTouchdowns()
    {
        return $this->rushingTouchdowns;
    }

    /**
     * @param mixed $rushingTouchdowns
     */
    public function setRushingTouchdowns($rushingTouchdowns)
    {
        $this->rushingTouchdowns = $rushingTouchdowns;
    }

    /**
     * @return mixed
     */
    public function getReceptions()
    {
        return $this->receptions;
    }

    /**
     * @param mixed $receptions
     */
    public function setReceptions($receptions)
    {
        $this->receptions = $receptions;
    }

    /**
     * @return mixed
     */
    public function getReceivingYards()
    {
        return $this->receivingYards;
    }

    /**
     * @param mixed $receivingYards
     */
    public function setReceivingYards($receivingYards)
    {
        $this->receivingYards = $receivingYards;
    }

    /**
     * @return mixed
     */
    public function getYardsPerReception()
    {
        return $this->yardsPerReception;
    }

    /**
     * @param mixed $yardsPerReception
     */
    public function setYardsPerReception($yardsPerReception)
    {
        $this->yardsPerReception = $yardsPerReception;
    }

    /**
     * @return mixed
     */
    public function getReceivingTouchdowns()
    {
        return $this->receivingTouchdowns;
    }

    /**
     * @param mixed $receivingTouchdowns
     */
    public function setReceivingTouchdowns($receivingTouchdowns)
    {
        $this->receivingTouchdowns = $receivingTouchdowns;
    }

    /**
     * @return mixed
     */
    public function getReceivingLong()
    {
        return $this->receivingLong;
    }

    /**
     * @param mixed $receivingLong
     */
    public function setReceivingLong($receivingLong)
    {
        $this->receivingLong = $receivingLong;
    }

    /**
     * @return mixed
     */
    public function getInterceptions()
    {
        return $this->interceptions;
    }

    /**
     * @param mixed $interceptions
     */
    public function setInterceptions($interceptions)
    {
        $this->interceptions = $interceptions;
    }

    /**
     * @return mixed
     */
    public function getInterceptionYards()
    {
        return $this->interceptionYards;
    }

    /**
     * @param mixed $interceptionYards
     */
    public function setInterceptionYards($interceptionYards)
    {
        $this->interceptionYards = $interceptionYards;
    }

    /**
     * @return mixed
     */
    public function getInterceptionTouchdowns()
    {
        return $this->interceptionTouchdowns;
    }

    /**
     * @param mixed $interceptionTouchdowns
     */
    public function setInterceptionTouchdowns($interceptionTouchdowns)
    {
        $this->interceptionTouchdowns = $interceptionTouchdowns;
    }

    /**
     * @return mixed
     */
    public function getKickReturns()
    {
        return $this->kickReturns;
    }

    /**
     * @param mixed $kickReturns
     */
    public function setKickReturns($kickReturns)
    {
        $this->kickReturns = $kickReturns;
    }

    /**
     * @return mixed
     */
    public function getKickReturnYards()
    {
        return $this->kickReturnYards;
    }

    /**
     * @param mixed $kickReturnYards
     */
    public function setKickReturnYards($kickReturnYards)
    {
        $this->kickReturnYards = $kickReturnYards;
    }

    /**
     * @return mixed
     */
    public function getYardsPerKickReturn()
    {
        return $this->yardsPerKickReturn;
    }

    /**
     * @param mixed $yardsPerKickReturn
     */
    public function setYardsPerKickReturn($yardsPerKickReturn)
    {
        $this->yardsPerKickReturn = $yardsPerKickReturn;
    }

    /**
     * @return mixed
     */
    public function getKickReturnLong()
    {
        return $this->kickReturnLong;
    }

    /**
     * @param mixed $kickReturnLong
     */
    public function setKickReturnLong($kickReturnLong)
    {
        $this->kickReturnLong = $kickReturnLong;
    }

    /**
     * @return mixed
     */
    public function getKickReturnTouchdowns()
    {
        return $this->kickReturnTouchdowns;
    }

    /**
     * @param mixed $kickReturnTouchdowns
     */
    public function setKickReturnTouchdowns($kickReturnTouchdowns)
    {
        $this->kickReturnTouchdowns = $kickReturnTouchdowns;
    }

    /**
     * @return mixed
     */
    public function getPuntReturns()
    {
        return $this->puntReturns;
    }

    /**
     * @param mixed $puntReturns
     */
    public function setPuntReturns($puntReturns)
    {
        $this->puntReturns = $puntReturns;
    }

    /**
     * @return mixed
     */
    public function getPuntReturnYards()
    {
        return $this->puntReturnYards;
    }

    /**
     * @param mixed $puntReturnYards
     */
    public function setPuntReturnYards($puntReturnYards)
    {
        $this->puntReturnYards = $puntReturnYards;
    }

    /**
     * @return mixed
     */
    public function getYardsPerPuntReturn()
    {
        return $this->yardsPerPuntReturn;
    }

    /**
     * @param mixed $yardsPerPuntReturn
     */
    public function setYardsPerPuntReturn($yardsPerPuntReturn)
    {
        $this->yardsPerPuntReturn = $yardsPerPuntReturn;
    }

    /**
     * @return mixed
     */
    public function getPuntReturnLong()
    {
        return $this->puntReturnLong;
    }

    /**
     * @param mixed $puntReturnLong
     */
    public function setPuntReturnLong($puntReturnLong)
    {
        $this->puntReturnLong = $puntReturnLong;
    }

    /**
     * @return mixed
     */
    public function getPuntReturnTouchdowns()
    {
        return $this->puntReturnTouchdowns;
    }

    /**
     * @param mixed $puntReturnTouchdowns
     */
    public function setPuntReturnTouchdowns($puntReturnTouchdowns)
    {
        $this->puntReturnTouchdowns = $puntReturnTouchdowns;
    }

    /**
     * @return mixed
     */
    public function getFieldGoalAttempts()
    {
        return $this->fieldGoalAttempts;
    }

    /**
     * @param mixed $fieldGoalAttempts
     */
    public function setFieldGoalAttempts($fieldGoalAttempts)
    {
        $this->fieldGoalAttempts = $fieldGoalAttempts;
    }

    /**
     * @return mixed
     */
    public function getFieldGoalMakes()
    {
        return $this->fieldGoalMakes;
    }

    /**
     * @param mixed $fieldGoalMakes
     */
    public function setFieldGoalMakes($fieldGoalMakes)
    {
        $this->fieldGoalMakes = $fieldGoalMakes;
    }

    /**
     * @return mixed
     */
    public function getFieldGoalLong()
    {
        return $this->fieldGoalLong;
    }

    /**
     * @param mixed $fieldGoalLong
     */
    public function setFieldGoalLong($fieldGoalLong)
    {
        $this->fieldGoalLong = $fieldGoalLong;
    }

    /**
     * @return mixed
     */
    public function getFieldGoalPoints()
    {
        return $this->fieldGoalPoints;
    }

    /**
     * @param mixed $fieldGoalPoints
     */
    public function setFieldGoalPoints($fieldGoalPoints)
    {
        $this->fieldGoalPoints = $fieldGoalPoints;
    }

    /**
     * @return mixed
     */
    public function getExtraPointAttempts()
    {
        return $this->extraPointAttempts;
    }

    /**
     * @param mixed $extraPointAttempts
     */
    public function setExtraPointAttempts($extraPointAttempts)
    {
        $this->extraPointAttempts = $extraPointAttempts;
    }

    /**
     * @return mixed
     */
    public function getExtraPointMakes()
    {
        return $this->extraPointMakes;
    }

    /**
     * @param mixed $extraPointMakes
     */
    public function setExtraPointMakes($extraPointMakes)
    {
        $this->extraPointMakes = $extraPointMakes;
    }

    /**
     * @return mixed
     */
    public function getPunts()
    {
        return $this->punts;
    }

    /**
     * @param mixed $punts
     */
    public function setPunts($punts)
    {
        $this->punts = $punts;
    }

    /**
     * @return mixed
     */
    public function getPuntYards()
    {
        return $this->puntYards;
    }

    /**
     * @param mixed $puntYards
     */
    public function setPuntYards($puntYards)
    {
        $this->puntYards = $puntYards;
    }

    /**
     * @return mixed
     */
    public function getYardsPerPunt()
    {
        return $this->yardsPerPunt;
    }

    /**
     * @param mixed $yardsPerPunt
     */
    public function setYardsPerPunt($yardsPerPunt)
    {
        $this->yardsPerPunt = $yardsPerPunt;
    }

    /**
     * @return mixed
     */
    public function getPuntTouchBacks()
    {
        return $this->puntTouchBacks;
    }

    /**
     * @param mixed $puntTouchBacks
     */
    public function setPuntTouchBacks($puntTouchBacks)
    {
        $this->puntTouchBacks = $puntTouchBacks;
    }

    /**
     * @return mixed
     */
    public function getPuntsInside20()
    {
        return $this->puntsInside20;
    }

    /**
     * @param mixed $puntsInside20
     */
    public function setPuntsInside20($puntsInside20)
    {
        $this->puntsInside20 = $puntsInside20;
    }

    /**
     * @return mixed
     */
    public function getPuntLong()
    {
        return $this->puntLong;
    }

    /**
     * @param mixed $puntLong
     */
    public function setPuntLong($puntLong)
    {
        $this->puntLong = $puntLong;
    }

    /**
     * @return mixed
     */
    public function getFumbles()
    {
        return $this->fumbles;
    }

    /**
     * @param mixed $fumbles
     */
    public function setFumbles($fumbles)
    {
        $this->fumbles = $fumbles;
    }

    /**
     * @return mixed
     */
    public function getFumblesRecovered()
    {
        return $this->fumblesRecovered;
    }

    /**
     * @param mixed $fumblesRecovered
     */
    public function setFumblesRecovered($fumblesRecovered)
    {
        $this->fumblesRecovered = $fumblesRecovered;
    }

    /**
     * @return mixed
     */
    public function getTackles()
    {
        return $this->tackles;
    }

    /**
     * @param mixed $tackles
     */
    public function setTackles($tackles)
    {
        $this->tackles = $tackles;
    }

    /**
     * @return mixed
     */
    public function getSoloTackles()
    {
        return $this->soloTackles;
    }

    /**
     * @param mixed $soloTackles
     */
    public function setSoloTackles($soloTackles)
    {
        $this->soloTackles = $soloTackles;
    }

    /**
     * @return mixed
     */
    public function getSacks()
    {
        return $this->sacks;
    }

    /**
     * @param mixed $sacks
     */
    public function setSacks($sacks)
    {
        $this->sacks = $sacks;
    }

    /**
     * @return mixed
     */
    public function getTacklesForLoss()
    {
        return $this->tacklesForLoss;
    }

    /**
     * @param mixed $tacklesForLoss
     */
    public function setTacklesForLoss($tacklesForLoss)
    {
        $this->tacklesForLoss = $tacklesForLoss;
    }

    /**
     * @return mixed
     */
    public function getPassesDefended()
    {
        return $this->passesDefended;
    }

    /**
     * @param mixed $passesDefended
     */
    public function setPassesDefended($passesDefended)
    {
        $this->passesDefended = $passesDefended;
    }

    /**
     * @return mixed
     */
    public function getQuarterbackHurries()
    {
        return $this->quarterbackHurries;
    }

    /**
     * @param mixed $quarterbackHurries
     */
    public function setQuarterbackHurries($quarterbackHurries)
    {
        $this->quarterbackHurries = $quarterbackHurries;
    }

    /**
     * @return mixed
     */
    public function getDefensiveTouchdowns()
    {
        return $this->defensiveTouchdowns;
    }

    /**
     * @param mixed $defensiveTouchdowns
     */
    public function setDefensiveTouchdowns($defensiveTouchdowns)
    {
        $this->defensiveTouchdowns = $defensiveTouchdowns;
    }



}