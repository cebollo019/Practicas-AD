<?php 

	$numero1="";
	
	for ($i = 1; $i <= 5; $i++) {
	
	$numero=mt_rand(0,12);
	
    if ($numero<10) $numero1=$numero1.((string)$numero); 
	else if ($numero==10) $numero1=$numero1.'a';
	else if ($numero==11) $numero1=$numero1.'b';
	else if ($numero==12) $numero1=$numero1.'c';
	
	}
	
	$numero2="";
	
	for ($i = 1; $i <= 5; $i++) {
	
	$numero=mt_rand(0,12);
	
	if ($i==3) $numero2=$numero2.'.';
    else if ($numero<10) $numero2=$numero2.((string)$numero); 
	else if ($numero==10) $numero2=$numero2.'a';
	else if ($numero==11) $numero2=$numero2.'b';
	else if ($numero==12) $numero2=$numero2.'c';
	
	}
	
    ?>
    
    <html>
     
     <p><b><?php echo "La cadena entera ".$numero1." se a convertido al numero entero: ".((integer)$numero1);;?></b></p>
     
     <p><b><?php echo "La cadena entera ".$numero2." se a convertido al numero real: ".((float)$numero2);?></b></p>
     
    
    </html>
    
	