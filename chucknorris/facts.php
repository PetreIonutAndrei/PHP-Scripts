<?php
  $lines = file('facts.txt'); //array_filter
  //sau $lines = array_filter($lines,function($line){
  //    return !empty(trim($line))
  //      } );



  //pick random line

  $position = rand(0, count($lines)-1); // sau array_rand($lines)

  $line = $lines[$position];

  // if the line is empty pick the next trader_line

    if(empty(trim($line))) {
      $line = $lines[$position + 1];
    }
    echo $line;
  //echo the line

// mergea si cu array_rand - da o cheie aleatorie
 ?>
