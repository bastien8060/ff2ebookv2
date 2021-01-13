<?php 
ini_set('default_charset', 'UTF-8');


$str1 = "\u6740";
$str2 = "\u6740\u7834\u72fc";



echo "\n\n\noriginal\n\n\n";
echo $str1;
echo "\n";
echo $str2;
echo "\n\n\nNew\n\n\n";


$str1 = preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
    return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
}, $str1);

$str2 = preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
    return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
}, $str2);



echo "\n\n\n";
echo $str1;
echo "\n";
echo $str2;
echo "\n\n\nend";

