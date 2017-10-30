<?php

echo "sart de berekening; operator zo invoeren + = plus, - = min, * = keer, / = delen";
echo "<br>";

$gtl1 = $_GET['nr1'];
$gtl2 = $_GET['nr2'];
$var3 = $_GET['o'];

echo $gtl1 . "\n";
echo $gtl2 . "\n";
echo $var3;   
echo "<br>";

echo "<br>";


    
    switch ($var3){
        
        
        case "plus":
        
            optellen($gtl1, $gtl2);
            
            return;

        case "min":
             
            aftrekken($gtl1, $gtl2);
              
           return; 
            
        case "keer":
                           
            vermenigvuldigen($gtl1, $gtl2); 
            
           return; 

        case "delen":
                           
            delen($gtl1, $gtl2); 
            
           return;
         
    }

        
    function optellen($gtl1, $gtl2){
            echo $gtl1 . "+" . $gtl2 . "=";
            
            echo $som=$gtl1+$gtl2;
            
    }
    
    function aftrekken($gtl1, $gtl2){
            echo $gtl1 . "-" . $gtl2 . "=";
            
            echo $som=$gtl1-$gtl2;
    }
    
    function vermenigvuldigen($gtl1, $gtl2){
            echo $gtl1 . "*" . $gtl2 . "=";
            
            echo $som=$gtl1*$gtl2;
    }
    
    
    function delen($gtl1, $gtl2){
            echo $gtl1 . "/" . $gtl2 . "=";
            
            echo $som=$gtl1/$gtl2;
    }
    

?>