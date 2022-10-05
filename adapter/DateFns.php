<?php
require_once "RoitDateProtocol.php";

class DateFns implements RoitDateProtocol
{
    private $date;

    public function __construct(string $date)
    {
        $this->date = $date;
    }

    public function formatToDayMonthYear(): string
    {
        $dateTime = new DateTime($this->date);
       
        return $dateTime->format('d/m/Y');
    }
}
