<?php

## create a new link
if ($_COOKIE["cjsc"] == "") {
  $links = array();
  $links[] = 'http://www.surveygizmo.com/s3/3511947/AB-953-forms-test-combo-repeat?sguid=';
  $links[] = 'http://www.surveygizmo.com/s3/3506584/AB-953-forms-copy-2?sguid=';
  
  shuffle($links);
  
  $i        = rand(0, (count($links) - 1));
  $link    = $links[$i];
  
  $link = $link.rand(1000,9999);
  
  setcookie("cjsc", $link);
} else {
  $link = $_COOKIE["cjsc"];
  
  ## unsets the cookie
  #setcookie("cjsc", "", time() - 1);
}

header("Location: {$link}");

exit;
?>
