<?php
/*
    TOOLS SHORT URL
    ZHU BAI LEE
    BLACK CODER CRUSH
    APRIL 24, 2020
    AT 21.21 WIB
*/
error_reporting(0);
system("clear");
echo "\n+-----------------+\n     SHORT URL\n    ZHU BAI LEE\n BLACK CODER CRUSH\n+-----------------+\n\n";
echo "url: ";
$url = trim(fgets(STDIN));
$ci = curl_init();
curl_setopt($ci, CURLOPT_URL, "https://www.shorturl.at/shortener.php");
curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ci, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ci, CURLOPT_POSTFIELDS, "u=" . $url);
$ce = curl_exec($ci);
$hsl = array();
preg_match("/<input id=\"shortenurl\" type=\"text\" value=\"(.*?)\"/", $ce, $hsl);
echo "short link: " . $hsl[1] . "\n";
?>