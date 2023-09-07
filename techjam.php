<?php
for ($number = 33; $number <= 543; $number++) { //laat de nummers tussen 33 en 543 zien
    if($number % 9 == 0 && $number % 5 == 0 && $number % 2 == 0){//checkt naar de getallen die door 9, 5 en 2 gedeeld kunnen worden
        echo "<b>web</b> <br>";//schrijft de tekst
    }
    elseif($number % 9 == 0 && $number % 5 == 0){//checkt naar de getallen die door 9 en 5 gedeeld kunnen worden
        echo "web <br>";//schrijft de tekst  
    }
    elseif($number % 5 == 0 && $number % 2 == 0){//checkt naar de getallen die door 5 en 2 gedeeld kunnen worden
        echo "<b>software</b> <br>";//schrijft de tekst
    }
    elseif($number % 5 == 0){//checkt naar de getallen die door 5 gedeeld kunnen worden
        echo "software <br>";//schrijft de tekst
    }
    elseif($number % 9 == 0 && $number % 2 == 0){//checkt naar de getallen die door 9 en 2 gedeeld kunnen worden
        echo "<b>developer</b> <br>";//schrijft de tekst 
    }
    elseif($number % 9 == 0){//checkt naar de getallen die door 9 gedeeld kunnen worden
        echo "developer <br>";//schrijft de tekst
    }
    elseif($number % 2 == 0){//checkt naar de getallen die door 2 gedeeld kunnen worden
        echo "<b>$number</b> <br>";//schrijft de tekst 
    }

    else{
        echo "$number <br>";//laat de overige getallen zien
    }
}

