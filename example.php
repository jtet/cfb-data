<?php
require_once 'vendor/autoload.php';

use CFBData\Scoreboard;
use CFBData\Game;
use CFBData\Rankings;
use CFBData\Standings;

$scoreboard = Scoreboard::get(2016,2);

//print_r($scoreboard);

$game = Game::get(400763535);

//print_r($game);

$rankings = Rankings::get(2016,2);

//print_r($rankings);

$standings = Standings::get(2016);

print_r($standings);