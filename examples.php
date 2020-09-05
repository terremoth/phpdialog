<?php
require __DIR__.'/vendor/autoload.php';

use Dialog\Calendar;
use Dialog\InputBox;
use Dialog\MsgBox;
use Dialog\YesNo;

$calendar = new Calendar;
$calendar->title('My calendar')
         ->text('Hello darkness, my old Calendar');

echo PHP_EOL.'Response is '.$calendar->show()->getAnswer().PHP_EOL;

$inputBox = new InputBox;
$inputBox->title('My inputbox')
         ->text('What is your name?');

echo PHP_EOL.'Response is '.$inputBox->show()->getAnswer().PHP_EOL;

$msgBox = new MsgBox;
$msgBox->title('My msgbox')
       ->text('Hello darkness, my old message box');


$yesNo = new YesNo;
$yesNo->title('My yesno box')
      ->text('Are you a Unix Lover?');

// unix exit code for true/success is zero so we cast:
echo PHP_EOL.'Response is '.(int)!($yesNo->show()->getExitCode()).PHP_EOL;
