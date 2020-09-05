<?php
require __DIR__.'/vendor/autoload.php';

use Dialog\Calendar;
use Dialog\InputBox;
use Dialog\MsgBox;
use Dialog\BuildList;
use Dialog\YesNo;

$calendar = new Calendar;
$calendar->title('My calendar')
         ->text('Hello darkness, my old Calendar');

echo PHP_EOL.'Response is '.$calendar->show()->getAnswer().PHP_EOL;

$msgBox = new MsgBox;
$msgBox->title('My msgbox')
       ->text('Hello darkness, my old message box');

echo PHP_EOL.'Response is '.$msgBox->show()->getAnswer().PHP_EOL;
