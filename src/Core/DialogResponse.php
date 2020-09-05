<?php

namespace Dialog\Core;

class DialogResponse
{   
    protected $answer;
    protected $exitCode;

    public function __construct($answer, $exitCode)
    {
        $this->answer = $answer;
        $this->exitCode = $exitCode;
    }

    public function getExitCode()
    {
        return $this->exitCode;
    }

    public function getAnswer()
    {
        return $this->answer;
    }
}
