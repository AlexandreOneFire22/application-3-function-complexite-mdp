<?php

require_once __DIR__."/../function/CalculComplexiteMdp.php";

echo CalculComplexiteMdp("aubry");
echo PHP_EOL;
echo CalculComplexiteMdp("super@ubry");
echo PHP_EOL;
echo CalculComplexiteMdp("Super@ubry2022");
echo PHP_EOL;
echo CalculComplexiteMdp("Giroud-Président||2027");
echo PHP_EOL;