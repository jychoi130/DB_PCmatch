 <?php

  
  $db = new mysqli("localhost","root","sang130","dbproject");
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>