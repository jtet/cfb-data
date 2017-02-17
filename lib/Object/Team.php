<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 12/5/16
 * Time: 11:04 AM
 */

namespace CFBData\Object;


class Team
{
    protected $homeAway;
    protected $id;
    protected $rank;
    protected $abbreviation;
    protected $displayName;
    protected $color;

    /**
     * @return mixed
     */
    public function getHomeAway()
    {
        return $this->homeAway;
    }

    /**
     * @param mixed $homeAway
     */
    public function setHomeAway($homeAway)
    {
        $this->homeAway = $homeAway;
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
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @param mixed $rank
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * @return mixed
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * @param mixed $abbreviation
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param mixed $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }


}