<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php
// Testing  for just one condition using the assignment sign and arithmetic logic
 $test = rand(2, 20) ;
   echo "</p> you rolled",' ', "$test <p>";

   if ($test <= 5 or $test == 10){ 

   echo "</p> you win <p>";
   }
   else{
     echo "</p> Ohh 😫you didn't win. better luck next time ! <p>";
   }

// using the AND operator
   $Score = rand(2, 8);
   $Sscore = rand(6,16);
     echo "</p> you rolled $Score",' and ', "$Sscore <p>";
    
   if($Score <= 5 and $Sscore = 8){
      
    echo "</p> you're probably there <p>";

   }   
    $count = 5;
   for($count = 6; $count <= 15; $count = $count+4 ){
    echo "$count", ' ';
   }
  //  echo "try again";
 ?> 
</body>
</html>


