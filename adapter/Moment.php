<?php

class Moment
{
    private $date;

    public function __construct(string $date)
    {
        $this->date = $date;
    }

    public function dayMonthYearFromMoment(): string
    {
        $dateTime = new DateTime($this->date);
       
        return "Moment: " . $dateTime->format('d-m-Y');
    }
}
