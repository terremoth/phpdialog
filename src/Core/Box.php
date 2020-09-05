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

    public function clear()
    {
        return passthru('clear || cls');
    }

    public function title($boxTitle) 
    {
        $this->additionalCommands .= ' --title "'.$boxTitle.'"';
        return $this;
    }
}
