<?php

function ucgen($n){
    for ($i=0;$i<=$n;$i++){
        $j=0;
        while($j<=$i){
            echo '0';
            $j++;
        }
        echo '<br>';
    }

}

echo ucgen(30);

?>