<?php

  //echo shell_exec("pyhton test_twitter_data.py");
  if(isset($_GET['tweet']))
  {
    $tempKey = $_GET['tweet'];
    $last_line = system('python simpleDemo.py "'.$tempKey.'"', $retval);
  }
 ?>
