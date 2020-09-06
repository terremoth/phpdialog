<?php

namespace Dialog\Core;

abstract class Box extends ExecCommand 
{
    protected $height = 15;
    protected $width = 50;
    protected $text = '';
    protected $signature = null;
    protected $additionalCommands = '';

    public function show()
    {  
        if (!$this->signature) {
            $className = explode("\\", strtolower(get_called_class()));
            $this->signature = end($className);
        }

        $args = $this->additionalCommands.' --'.$this->signature.' "'.$this->text.'" '.$this->height.' '.$this->width;
        //die($args.PHP_EOL);
        $result = $this->dialog($args);
        return $result;
    }    
    
    public function text($text)
    {
        $this->text = $text;
        return $this; 
    }

    public function clearAsShell()
    {
        passthru('clear || cls');
        return $this;
    }

    public function title($boxTitle) 
    {
        $this->additionalCommands .= ' --title "'.$boxTitle.'"';
        return $this;
    }

    public function asciiLines()
    {
        return $this;
    }

    public function aspect($ratio)
    {
        return $this;
    }

    public function backtitle()
    {
        return $this;
    }

    public function beep()
    {
        return $this;
    }

    public function beepAfter()
    {
        return $this;
    }

    public function begin($x, $y)
    {
        return $this;
    }

    public function cancelLabel($str)
    {
        return $this;
    }

    public function clear()
    {
        return $this;
    }

    public function colors()
    {
        return $this;
    }

    public function columnSeparator($str)
    {
        return $this;
    }

    public function crWrap()
    {
        return $this;
    }
    
    public function dateFormat($format)
    {
        return $this;
    }

    public function defaultButton($str)
    {
        return $this;
    }

    public function defaultItem($str)
    {
        return $this;
    }

    public function defaultNo()
    {
        return $this;
    }

    public function exitLabel()
    {
        return $this;
    }

    public function extraButton($str)
    {
        return $this;
    }

    public function extraLabel($str)
    {
        return $this;
    }

    public function helpButton()
    {
        return $this;
    }
    
    public function helpLabel($str)
    {
        return $this;
    }

    public function helpStatus()
    {
        return $this;
    }

    public function helpTags()
    {
        return $this;
    }

    public function hFile($str)
    {
        return $this;
    }

    public function hLine($str)
    {
        return $this;
    }

    public function ignore()
    {
        return $this;
    }

    public function inputFd($fd)
    {
        return $this;
    }

    public function insecure()
    {
        return $this;
    }

    public function itemHelp()
    {
        return $this;
    }

    public function keepTite()
    {
        return $this;
    }

    public function keepWindow()
    {
        return $this;
    }

    public function lastKey()
    {
        return $this;
    }

    public function maxInput($number)
    {
        return $this;
    }

    public function noCancel()
    {
        return $this;
    }

    public function noCollapse()
    {
        return $this;
    }

    public function noCrWrap()
    {
        return $this;
    }

    public function noItems()
    {
        return $this;
    }

    public function noKill()
    {
        return $this;
    }

    public function noLabel($str)
    {
        return $this;
    }

    public function noLines()
    {
        return $this;
    }

    public function noMouse()
    {
        return $this;
    }

    public function noNlExpand()
    {
        return $this;
    }

    public function withoutOk()
    {
        return $this;
    }

    public function noShadow()
    {
        return $this;
    }

    public function noTags()
    {
        return $this;
    }

    public function nook()
    {
        return $this;
    }

    public function okLabel($str)
    {
        return $this;
    }

    public function outputFd($fd)
    {
        return $this;
    }

    public function outputSeparator($str)
    {
        return $this;
    }

    public function printMaxSize()
    {
        return $this;
    }

    public function printSize()
    {
        return $this;
    }

    public function printTextOnly($text, $height, $width)
    {
        return $this;
    }

    public function printTextSize($text, $height, $width)
    {
        return $this;
    }

    public function printVersion()
    {
        return $this;
    }

    public function quoted()
    {
        return $this;
    }

    public function reorder()
    {
        return $this;
    }

    public function scrollbar()
    {
        return $this;
    }

    public function separateOutput()
    {
        return $this;
    }

    public function separateWidget($str)
    {
        return $this;
    }

    public function shadow()
    {
        return $this;
    }

    public function singleQuoted()
    {
        return $this;
    }

    public function sizeErr()
    {
        return $this;
    }

    public function sleep($secs)
    {
        return $this;
    }

    public function stderr()
    {
        return $this;
    }

    public function stdout()
    {
        return $this;
    }

    public function tabCorrect()
    {
        return $this;
    }

    public function tabLen($n)
    {
        return $this;
    }

    public function timeFormat($str)
    {
        return $this;
    }

    public function timeout($secs)
    {
        return $this;
    }

    public function version()
    {
        return $this;
    }

    public function visitItems()
    {
        return $this;
    }

    public function weekStart($str)
    {
        return $this;
    }

    public function yesLabel($str)
    {
        return $this;
    }
}

