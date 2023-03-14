<?php

class DateFns
{
    private $date;

    public function __construct(string $date)
    {
        $this->date = $date;
    }

    public function dayMonthYearFromDateFns(): string
    {
        $dateTime = new DateTime($this->date);
       
        return "DateFns: " . $dateTime->format('d/m/Y');
    }
}
