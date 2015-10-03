<?php 

	$numero1= mt_rand()/mt_getrandmax();
    $numero2= -1000+mt_rand()/mt_getrandmax()*(1000-(-1000));
	
	
    ?>
    
    <html>
    
    
    <p><b><?php 
	 echo " Numero real aleatorio entre 0 y 1: ".$numero1?></b></p>
    		
    <p> <b><?php 
	 echo " Numero real aleatorio entre -1000 y 1000: ".$numero2?></b></p>	 
		
		<p> <b><?php 
	 echo " Segundo numero truncado a las milesimas: ".round($numero2-0.0005,3);?></b></p>
   
   
    <p><b><?php
	 echo " Segundo numero truncado a las decenas: ".round($numero2-5,-1);?></b></p>
     
     
    
    </html>
    
	