<?php


class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = time() + microtime();
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime(){
        return $this->endTime;

    }


    public function start()
    {
        $this->startTime = time() + microtime();
    }

    public function stop()
    {
        $this->endTime = time() + microtime();
    }

    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}