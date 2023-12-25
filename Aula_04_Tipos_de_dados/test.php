<?php

echo mb_strlen('OLÁ', "utf-8"); //Comprimento do string, caracteres especiais como acento contam podem dificultar isto pois contam separado echo

echo mb_strtoupper("olá", "utf-8");
echo "<br>";
$string = '0123456789';
echo substr($string, 2, 8);//1º arg=índice; 2º arg=num de elementos incluindo o índice



