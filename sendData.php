<?php

  //echo shell_exec("pyhton test_twitter_data.py");
  if(isset($_GET['key']))
  {
    $tempKey = $_GET['key'];

    just_text_in_quotes(exec('python test_twitter_data.py '.'"'.$tempKey.'"', $retval));
    //$temp =json_decode($last_line,TRUE);
    //echo $temp[0] ;
  }
  function just_text_in_quotes($str) {
    if (preg_match('/"([^"]+)"/', $str, $m)) {
         print $m[1];
     } else if(preg_match("/'([^']+)'/", $str, $m))
     {
       print $m[1];
     }
}
 ?>
