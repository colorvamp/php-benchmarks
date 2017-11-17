<?php
	$arr = [];
	$i = 0;
	while( ++$i < 10000000 ){$arr[] = $i;}

	$starttime = microtime(true);
	foreach( $arr as $a ){}
	echo 'Foreach Time: ',(microtime(true)-$starttime)," ms\n";

	$c = count($arr);
	$starttime = microtime(true);
	for( $i = 0; $i < $c; $i++ ){}
	echo 'For Time:     ',(microtime(true)-$starttime)," ms\n";

	$tmp = false;
	$starttime = microtime(true);
	foreach( $arr as $a ){$tmp = $a;}
	echo 'Foreach Time:          ',(microtime(true)-$starttime)," ms\n";

	$tmp = false;
	$c = count($arr);
	$starttime = microtime(true);
	for( $i = 0; $i < $c; $i++ ){$tmp = $arr[$i];}
	echo 'For Time:              ',(microtime(true)-$starttime)," ms\n";

	$tmp = false;
	$a = reset($arr);
	$starttime = microtime(true);
	while( ($a = next($arr)) ){$tmp = $a;}
	echo 'Internal Pointer Time: ',(microtime(true)-$starttime)," ms\n";
