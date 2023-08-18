<?php
echo"<pre>";


$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
    function my_array($planets,$e){
function newPlanets($planets) {return array_filter($planets,function($e){return $e =! NULL ? $e : false;});}

 $gezegenler=newPlanets($planets);
 print_r($gezegenler);

$key =  array_rand($gezegenler,$e);
print_r($key);

foreach ($key as $value) {
    $dizi[] = $gezegenler[$value];
}
print_r($dizi);

}

    print_r(my_array($planets,3));

  
?>