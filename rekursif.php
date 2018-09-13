<?php

$i = 5;

function rekursif($j, $k){
  if($j>0){
    if ($k>0) {
      echo ("* ");
       $k--;
       rekursif($j, $k);
    }else {
      echo ("<br>");
      $j--;
      rekursif($j, $j);
    }
  }
}

rekursif($i, $i);

// =============================

$c = 5;

function angka($h, $b){
  if($h>0){
    if ($b>0) {
      echo ("$h");
       $b--;
       rekursif($h, $b);
    }else {
      echo ("<br>");
      $h--;
      rekursif($h, $h);
    }
  }
}

rekursif($c, $c);



 ?>
