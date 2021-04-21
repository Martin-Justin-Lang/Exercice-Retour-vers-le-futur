<?php

echo '<h1>Exercice Retour vers le futur</h1>' ;

$presentTime = new DateTime() ;
$destinationTime = new DateTime('01-08-2021 4:12');

echo 'Destination Time : '; echo $destinationTime->format('M-d-Y g:i A');
echo '<br>';
echo 'Present Time : ' ; echo $presentTime->format('M-d-Y g:i A');
echo '<br>';

$origin = new DateTime();
$target = new DateTime('01-08-2021 4:12');
$interval = $origin->diff($target);
echo 'Interval Time : '; echo $interval->format('%m mois %d days');