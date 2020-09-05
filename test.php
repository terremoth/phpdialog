<?php
ini_set(E_ERROR, E_ALL);

$tmpfile = tempnam(sys_get_temp_dir(), 'phpdialog');

$cmd = 'dialog --inputbox test 0 0 2> '.$tmpfile;
echo $cmd.PHP_EOL;
    
$pipes = array (NULL, NULL, NULL);
        // Allow user to interact with dialog
        $in = fopen ('php://stdin', 'r');
        $out = fopen ('php://stdout', 'w');
        //$in = ['pipe', 'w'];
        //$out = ['pipe', 'r'];
        // But tell PHP to redirect stderr so we can read it
        $p = proc_open ($cmd, array (
            0 => $in,
            1 => $out,
            2 => array ('pipe', 'w'),
            //2 => fopen($tmpfile, 'w'),
        ), $pipes);
        // Wait for and read result
        $result = stream_get_contents ($pipes[2]);
        // Close all handles
        $status = proc_get_status($p);
        
        fclose ($pipes[2]);
        fclose ($out);
        fclose ($in);
        proc_close ($p);
        var_dump($pipes); 
        var_dump($p);
        var_dump($in);
        var_dump($out);
        var_dump($result);        // Return result
        //$pid = $status['pid']u
        $exitcode = $status['exitcode'];
        var_dump($exitcode);
        $outFile = file_get_contents($tmpfile);
        echo 'tempfile: '.$tmpfile.PHP_EOL;
unlink($tmpfile);
echo 'out file: '.$outFile; 
