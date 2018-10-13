<?php
  $type = $_GET['type'];
  $name = $_GET['name'];
  $email = $_GET['email'];
  $date = $_GET['date'];
  $pos = intval($_GET['pos']);
  $filename = "tippek.txt";

  if($type === "get") {
    $myfile = fopen($filename, "r") or die("Unable to open file!");
    echo fread($myfile,filesize("tippek.txt"));
    fclose($myfile);
  } else {
    $current = file_get_contents($filename);
    
    $current .= "\n" . $name . ";" . $email . ";" . $pos . ";" . $date;
    
    file_put_contents($filename, $current);
  }
?>