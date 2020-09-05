<?php
require __DIR__.'/vendor/autoload.php';

use Dialog\Calendar;

$msgBox = new Calendar('Hello darkness, my old friend');
echo PHP_EOL.'response is '.$msgBox->show()->getAnswer().PHP_EOL;
