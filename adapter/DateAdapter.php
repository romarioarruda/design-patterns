<?php
require_once "RoitDateProtocol.php";

class DateAdapter
{
    public $api;

    public function __construct(RoitDateProtocol $api)
    {
        $this->api = $api;
    }
  
    public function formatToDayMonthYear(): string
    {
        return $this->api->formatToDayMonthYear();
    }
}
