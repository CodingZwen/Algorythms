<?php

class Calgo 
{
//datentypen

private $bucket = array();


function fillbucket($bucket)
{
	
	for($i = 0 ; $i < 10;$i++)
	{
	array_push($bucket, rand(1, 200));
	
	}
	
	echo "wir haben soviel elemente reingemacht: ".count($bucket);
}


function printbucket($bucket)
{

echo "der eimer hat soviel elemente: ".count($bucket);
for($i = 0; $i < count($bucket);$i++)
{

echo "Element Nummer(".$i+1;
echo " mit Wert: ".$bucket[$i];
echo "<br>";

}

}


//methoden
function bubblesort($bucket)
{
	
	
	$sorted = 0;
	$sorts = 0;
	
		
	while(!$sorted)
	{
	$sorted = 1;
	for($i = 0 ; $i < count($bucket);$i++)
	{
		
		if($i < count($bucket)-1)
		{
			if($bucket[$i] > $bucket[$i+1])
			{
				$temp = $bucket[$i];
				$bucket[$i] = $bucket[$i+1];
				$bucket[$i+1] = $temp;
				$sortet = 0;
				$sorts++;
				
			}
		}
	
	}	
	
	}
	
	echo "fertig sortiert mit".$sorts." Sortierungen";
}


}


?>
