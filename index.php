<?php
include_once 'ComparableCircle.php';

$circle_one = new ComparableCircle('CircleOne', 8);
$circle_two = new ComparableCircle('CircleTwo', 4);

var_dump($circle_one->compareTo($circle_two));