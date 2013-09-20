<?php
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, 'http://www.videobychoice.com');
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $contents = curl_exec ($ch);
 echo $contents;
 curl_close ($ch);
?>