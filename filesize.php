<?php
/*
	Output modifier for Modx to retrieve the filesize of a TV file
	As a option you can specify the following:
	bytes - displays as bytes (Default)
	kb - display as kb
	mb - displays as mb
	gb - displays as gb
	
	usage: [[+filetv:filesize=`kb`]]
*/


$basepath = $modx->config['base_path'];

$filename = $basepath.$input;

if(!empty($filename)){
	$filesize = filesize($filename);
	
	switch ($options) {
    case 'kb':
        $output = $filesize/1024;
        break;
    case 'mb':
        $output = $filesize/(1024*1024);
        break;
	case 'gb':
        $output = $filesize/(1024*1024*1024);
        break;
    default:
        $output = $filesize;
        break;
}
	$output = round($output, 2);
	return $output;
}
?>