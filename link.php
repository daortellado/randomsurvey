<?php
$links = array();
$links[] = 'http://www.espn.com';
$links[] = 'http://www.google.com';
 
shuffle($links);
 
$i        = rand(0, (count($links) - 1));
$link    = $links[$i];
 
header("Location: {$link}");
exit;
?>;