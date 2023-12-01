<?php
    $fruit = array("Grape","Cherry","Starfruit","Pineapple","Apple",
			"Watermelon","Raspberry","Banana","Orange","Strawberry");

    echo "<b><u>Asli :</u></b><br>";
    for ($i=0; $i < 10; $i++) { 
        echo $fruit[$i]."<br>";
    }

    echo "<br><b><u>array_reverse</u></b><br>";
    $buah1 = array_reverse($fruit);
    for ($i=0; $i < 10; $i++) { 
        echo $buah1[$i]."<br>";
    }

    echo "<br><b><u>array_multishort</u></b><br>";
    array_multisort($fruit);
    for ($i=0; $i < 10; $i++) { 
        echo $fruit[$i]."<br>";
    }

    echo "<br><b><u>sizeof</u></b><br>";
    $buah3 = sizeof($fruit);
    echo $buah3;

    echo "<br><b><u>shuffle</u></b><br>";
    shuffle($fruit);
    for ($i=0; $i < 10; $i++) { 
        echo $fruit[$i]."<br>";
    }

    echo "<br><b><u>array_pop</u></b><br>";
    array_pop($fruit);
    for ($i=0; $i < sizeof($fruit); $i++) { 
        echo $fruit[$i]."<br>";
    }
?>