<?php

$latitudeFrom = '23.258951';
$longitudeFrom = '77.410782';

$latitudeTo = '23.353586';
$longitudeTo = '85.324575';

//Calculate distance
$theta = $longitudeFrom - $longitudeTo;
$dist = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) + cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
$dist = acos($dist);
$dist = rad2deg($dist);
$miles = $dist * 60 *1.1515;

echo $distance = ($miles * 1.609344).' km';

?>