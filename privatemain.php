<?php
  $action = $_GET['action'];
  $filename = "tippek.txt";

  if($action === "get") {
    $myfile = fopen($filename, "r") or die("Unable to open file!");
    echo fread($myfile,filesize("tippek.txt"));
    fclose($myfile);
  } else if ($action === "start") {
    $current = "1";
    
    file_put_contents($filename, $current);
  } else {
    $current = file_get_contents($filename);
    
    $current = "0" . substr($current, 1);
    
    file_put_contents($filename, $current);
  }
?>