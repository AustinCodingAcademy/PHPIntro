<?php
/*
Homework 3, Problem 3
---------------------

Problem 3 - Foreach - problem3.php

For sequential PHP arrays, foreach loops give you (optional) access to the index of the current iteration in addition to the element. View a demo.

Consider the following arrays:

$atx_weekly_forecast = [77, 82, 100, 93, 80, 66, 70];
$days_of_week = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

Suppose index 0 in the $atx_weekly_forecast array represents Sunday. Create a foreach loop that echos out

The temperature on Sun will be 77
The temperature on Mon will be 82
The temperature on Tue will be 100
...
...
*/

$atx_weekly_forecast = [   77,    82,   100,    93,    80,    66,    70];
$days_of_week        = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

$things = array(
    'chair' => 'for sitting on',
    'table' => 'for putting stuff on',
);

foreach ($days_of_week as $key => $day) {
    echo "The temp on $day is $atx_weekly_forecast[$key]<br>";
}

?>

