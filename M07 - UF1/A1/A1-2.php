<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Factorial</title>

</head>

<body>
<?php
  
  $array = arrayMultidimensional(4);
  
  $arrayInv = arrayMultidimensionalInvers($array);

  echo "<br/> Array 1: <br/>";

  makeTable($array);
  
  echo "<br/> Array 1 a l'inversa: <br/>";
  
  makeTable($arrayInv);
 
  
function arrayMultidimensional($a) {
  
  $arrayMulti;
     
  for($row = 0; $row < $a; $row++){
    
    for($col = 0; $col < $a; $col++){
      
      if($row == $col){
        $arrayMulti[$row][$col] = "*";
      }
      
      if($col > $row){
        $arrayMulti[$row][$col] = $row + $col;
      }
      
      if($col < $row){
        $arrayMulti[$row][$col] = rand(10,20);
      }
     
    }
  }
  
  return $arrayMulti;
}
  
function arrayMultidimensionalInvers($a){
  
  $aInv;
  
  for($row = 0; $row < count($a); $row++){
    for($col = 0; $col < count($a); $col++){
      $aInv[$row][$col] = $a[$col][$row];
    }
  }
  
  return $aInv;
}

function makeTable($a) {
  echo "<table border=1>";
  
  for($row = 0; $row < count($a); $row++){
    echo "<tr>";
    
    for($col = 0; $col < count($a); $col++){
      
      echo "<td width=60 height=60 align=center>";
      echo $a[$row][$col];
      echo "</td>";
      
    }
    
    echo "</tr>";
  }
    
  echo "</table>";
}

?>

</body>
</html>