<?php
require_once "DateAdapter.php";
require_once "Moment.php";
require_once "DateFns.php";

echo "Date FNS:\n";
$datefns = new DateAdapter(new DateFns('2022-09-05'));

echo $datefns->formatToDayMonthYear();

echo "\n\n";

echo "Moment:\n";
$moment = new DateAdapter(new Moment('2022-09-05'));

echo $moment->formatToDayMonthYear();
