<?php

  $code = file_get_contents(__DIR__ . "code.php");

   while ($start = (strpos($code, "/*")) !== false ) {
     $end = strpos($code, "*/", $start + 2);

     $code = substr($code, 0 , $start) .
            substr($code, $end + 2);
 }

echo $code;
