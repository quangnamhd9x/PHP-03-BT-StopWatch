<?php
include 'StopWatch.php';

$stopwatch = new StopWatch();
$stopwatch->start();
echo $stopwatch->getStartTime();
echo "<br>";
for ($i = 0; $i < 1000000; $i ++) {
    echo $i;
}
echo "<br>";
$stopwatch->stop();
echo $stopwatch->getElapsedTime();