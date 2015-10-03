<?php 

	$numero1= -100+mt_rand()/mt_getrandmax()*(100-(-100));
    $numero2= 1+mt_rand()/mt_getrandmax()*(10-1);
	
	
    ?>
    
    <html>
    
    
    
    	<p><b><?php $resultado=$numero1+$numero2;
	 echo $numero1." + ".$numero2." = ".$resultado ?></b></p>
    		
     <p><b><?php $resultado=$numero1-$numero2;
	 echo $numero1." - ".$numero2." = ".$resultado ?></b></p>			 
		
     <p><b><?php $resultado=$numero1*$numero2;
	 echo $numero1." x ".$numero2." = ".$resultado ?></b></p>	 
    
     <p><b><?php $resultado=$numero1/$numero2;
	 echo $numero1." / ".$numero2." = ".$resultado ?></b></p>
    
    <p><b><?php $resultado=$numero1%$numero2;
	 echo $numero1." % ".$numero2." = ".$resultado ?></b></p>
     
     <p><b><?php $incremento1=++$numero1;
	 		$incremento2=++$numero2;
			$numero1--;
			$numero2--;
	 echo "Incremento: ".$incremento1." , ".$incremento2?></b></p>
     
    <p><b> <?php $decremento1=--$numero1;
	 		$decremento2=--$numero2;
			$numero1++;
			$numero2++;
	 echo "Decremento: ".$decremento1." , ".$decremento2?></b></p>
     
     <p><b><?php 
	 echo "Inversos: ".-$numero1." , ".-$numero2?></b></p>
     
     
    
    </html>
    
	