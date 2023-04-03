<?php
mktime(
    int $hour,
    ?int $minute = null,
    ?int $second = null,
    ?int $month = null,
    ?int $day = null,
    ?int $year = null
): int|false

$date = new DateTime('2000-02-18');
$dade2 = new DateTime('2023-02-18');
$interval = date_diff(date1,$date2);
echo "$interval"[y];