<?php

namespace Dialog\Core;

abstract class Box extends ExecCommand 
{
    protected $height = 20;
    protected $width = 50;
    protected $text = '';
    protected $signature;
    
    public function show()
    {  
        $className = explode("\\", strtolower(get_called_class()));

        $this->signature = end($className);
        $result = $this->dialog('--'.$this->signature.' "'.$this->text.'" '.$this->height.' '.$this->width);
        //passthru("clear");
        return $result;
    }    
    
    public function text($text)
    {
        $this->text = $text;
    }
}
