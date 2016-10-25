<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Factorial</title>

</head>

<body>
<?php
  
  $array = factorialArray(array(1,2,3,4,5,6,7,8,9));
  
  echo "<br/><br/>Resultat = <br/>";
  print_r($array);
  
function factorialArray($a){
  $b = array();
  echo "<p>isArray? </p>";
  if(!is_array($a)){
    echo "<p>False</p>";
    return false;
  } else {
      echo "<p>True</p>";
  }
  
  echo "<p>isInt??</p>";
  
  foreach ($a as $valor) {
    if(!is_int($valor)){
      echo $valor . " = false<br/>";
      return false;
    }else{
      echo $valor . " = true<br/>";
    }
  }
     
  for($g = 0; $g < count($a); $g++){
    array_push($b, factorial($a[$g]));
  }
  
  return $b;
}

function factorial($number) {
  if ($number == 0) { 
    return 1; 
  } else { 
    return $number * factorial($number-1); 
  }
}

?>

</body>
</html>