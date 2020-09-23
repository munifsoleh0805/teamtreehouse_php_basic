<?php 

// Buat function askName
// Parameternya $nama
// askName("Munif Soleh"); //Namamu adalah Munif Soleh

function askName($nama)
{
    $format_nama=ucwords(strtolower($nama));
    echo "Namamu adalah $format_nama";
}
// askName("MunIf sOleh");
// echo 'SarNep\'';


?>