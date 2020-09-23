<?php

//Buat function Celcius to Fahrenheit
//Rumus (nilai celcius * 5/9) +32
//Parameter function int celcius
//infoke function Celcius to Fahrenheit(12); // print 53.6

function CelciustoFahrenheit($celcius)
{
    $convertion=($celcius*9/5)+32;
    echo "$celcius celcius=$convertion fahrenheit";
}
// CelciustoFahrenheit(80);
?>