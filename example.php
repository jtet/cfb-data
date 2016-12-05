<?php
require_once 'vendor/autoload.php';

use CFBData\ESPNScoreboard;
use CFBData\ESPNGame;
use CFBData\ESPNRankings;
use CFBData\ESPNStandings;

$scoreboard = ESPNScoreboard::get(2016,1,80);
print_r($scoreboard);

//$game = ESPNGame::get(233050096);
//$game = ESPNGame::get(400926942);

//print_r($game);

//$rankings = ESPNRankings::get(2016,2);

//print_r($rankings);

//$standings = ESPNStandings::get(2016);

//print_r($standings);