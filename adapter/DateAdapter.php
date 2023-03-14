<?php
require_once "RoitDateProtocol.php";
require_once "Moment.php";
require_once "DateFns.php";

class DateAdapter implements RoitDateProtocol
{
    public $api;

    public function __construct(string $date)
    {
        // $this->api = new DateFns($date);
        $this->api = new Moment($date);
    }
  
    public function formatToDayMonthYear(): string
    {
        return $this->api->dayMonthYearFromMoment();
        // return $this->api->dayMonthYearFromDateFns();
    }
}
