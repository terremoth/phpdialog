<?php

namespace Dialog\Core;

abstract class ExecCommand
{
    public function dialog($args) 
    {   
        $tmpFile = tempnam(sys_get_temp_dir(), 'phpdialog');

        $pipes = [NULL, NULL, NULL];
        
        // Allow user to interact with dialog
        $in  = fopen ('php://stdin', 'r');
        $out = fopen ('php://stdout', 'w');
        
        // But tell PHP to redirect stderr so we can read it
        $p = proc_open('dialog '.$args.' 2>'.$tmpFile,[
            0 => $in,
            1 => $out,
            2 => ['pipe', 'w']
        ], $pipes);
        
        // Wait for and read result
        $result = stream_get_contents ($pipes[2]);
        
        // Close all handles
        fclose ($pipes[2]);
        fclose ($out);
        fclose ($in);
       
        $status = proc_get_status($p);
        proc_close($p);
        
        $exitcode = $status['exitcode'];
        $answer = file_get_contents($tmpFile);
        unlink($tmpFile);

        $response = new DialogResponse($answer, $exitcode);
        return $response;
    }    
}
