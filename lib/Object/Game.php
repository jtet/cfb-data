<?php
namespace CFBData\Object;


class Game
{

    protected $drives = [];

    protected $teams = [];

    protected $broadcasts = [];

    protected $date;

    protected $neutralSite;

    protected $conferenceCompetition;

    protected $id;

    protected $homeScore;

    protected $awayScore;

    protected $venue;

    protected $attendance;

    /**
     * @return mixed
     */
    public function getAttendance()
    {
        return $this->attendance;
    }

    /**
     * @param mixed $attendance
     */
    public function setAttendance($attendance)
    {
        $this->attendance = $attendance;
    }

    /**
     * @return mixed
     */
    public function getVenue() : Venue
    {
        return $this->venue;
    }

    /**
     * @param mixed $venue
     */
    public function setVenue(Venue $venue)
    {
        $this->venue = $venue;
    }

    /**
     * @return mixed
     */
    public function getDrives()
    {
        return $this->drives;
    }

    /**
     * @param Drive $drive
     * @internal param mixed $drives
     */
    public function addDrive(Drive $drive)
    {
        $this->drives[]= $drive;
    }

    /**
     * @return mixed
     */
    public function getTeams()
    {
        return $this->teams;
    }

    /**
     * @param Team $team
     * @internal param mixed $teams
     */
    public function addTeam(Team $team)
    {
        $this->teams[]= $team;
    }

    /**
     * @return mixed
     */
    public function getBroadcasts()
    {
        return $this->broadcasts;
    }

    /**
     * @param Broadcast $broadcast
     * @internal param mixed $broadcasts
     */
    public function addBroadcast(Broadcast $broadcast)
    {
        $this->broadcasts[]= $broadcast;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getNeutralSite()
    {
        return $this->neutralSite;
    }

    /**
     * @param mixed $neutralSite
     */
    public function setNeutralSite($neutralSite)
    {
        $this->neutralSite = $neutralSite;
    }

    /**
     * @return mixed
     */
    public function getConferenceCompetition()
    {
        return $this->conferenceCompetition;
    }

    /**
     * @param mixed $conferenceCompetition
     */
    public function setConferenceCompetition($conferenceCompetition)
    {
        $this->conferenceCompetition = $conferenceCompetition;
    }

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


    public function getHomeTeam() : Team
    {
        foreach($this->teams as $team)
        {
            if($team->getHomeAway() == 'home')
            {
                return $team;
            }
        }
    }

    public function getAwayTeam() : Team
    {
        foreach($this->teams as $team)
        {
            if($team->getHomeAway() == 'away')
            {
                return $team;
            }
        }
    }

}