<?php
require_once 'vendor\laravel\framework\src\Illuminate\Support\Facades\Facade.php';
require_once 'vendor\laravel\framework\src\Illuminate\Support\Facades\DB.php';
    echo $d = '"'.date('h:i:s d.m.Y', strtotime('+3 hours')).'"';
    echo $t = '"'.date('Y-m-d h:i:s', strtotime('+3 hours')).'"';
    \Illuminate\Support\Facades\DB::insert('insert into showtime (unixtime, realtime) values (?, ?)', [$t, "$d"]);
?>
