# cfb-data
Php port of BlueSCar/cfb-data


# Installation
``composer require jtet/cfb-data``

#Use
````
require_once 'vendor/autoload.php';

use CFBData\Scoreboard;
use CFBData\Game;
use CFBData\Rankings;

$scoreboard = Scoreboard::get(2016,2);

//print_r($scoreboard);

$game = Game::get(400763535);

//print_r($game);

$rankings = Rankings::get(2016,2);

//print_r($rankings);
````