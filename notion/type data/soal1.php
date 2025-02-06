<?php
$string = "SMK Wikrama";
$wikrama =substr($string,4,7);
$smk    = substr($string,0,3);
$letik  = strtolower($smk);

echo "$wikrama\n$smk\n$letik";