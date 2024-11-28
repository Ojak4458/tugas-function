<?php
include 'tugas_function.php';


listgame();

$listgame1 = topupgame("honor of king", 16000);
$listgame2 = topupgame("wild rift", 32000);

echo $listgame1;
echo $listgame2;

