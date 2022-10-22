<?php
require_once "DateAdapter.php";

$date = new DateAdapter('2022-09-05');

echo $date->formatToDayMonthYear();
