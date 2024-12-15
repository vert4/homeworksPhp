<?php
declare(strict_types=1);
date_default_timezone_set('Europe/Moscow');
$month = 12; 
$year = 2024; 


function getCalendarForMonth(int $month, int $year): void
{
   
    $arMonthDay = array();
    $currentDayUnixTime = strtotime(date("{$year}-{$month}-01"));
    $currentMonth = date('m', $currentDayUnixTime);
    $dayWeekIndex = 1;
    $weekIndex = 1;
    

    while($month == $currentMonth) {
        $currentDayWeekNumber = date("N", $currentDayUnixTime);
        if($currentDayWeekNumber == $dayWeekIndex) {
            $arMonthDay[$weekIndex][$dayWeekIndex] = date('d', $currentDayUnixTime);
            $currentDayUnixTime = strtotime("+1 day", $currentDayUnixTime);
            $currentMonth = date('m', $currentDayUnixTime);
        }
        else {
            $arMonthDay[$weekIndex][$dayWeekIndex] = "  ";
        }

        if($dayWeekIndex == 7) {
            $weekIndex++;
            $dayWeekIndex = 1;
        }
        else {
            $dayWeekIndex++;
        }
    }

    
    function firstWeekDay(array $array): void {
        foreach ($array as $value) 
        {
            if($value === '01' && (array_search($value, $array)) != 6 && (array_search($value, $array)) 
                != 7 || $value === '04' && (array_search($value, $array)) != 6 && (array_search($value, $array)) != 7) {
                echo "\033[31m$value\033[0m" . ' ' ;
            } else {
                echo $value . ' ';
            };

        }
        
    }
    function workingDays(array $array): void 
    {
        foreach ($array as $value) {
            if(array_search($value, $array) === 1 || array_search($value, $array) === 4){
                echo "\033[31m$value\033[0m" . ' ' ;
            } else {
                echo $value . ' ';
            }           
        }
    }

    //Вывод 
    echo date('F', mktime(0, 0, 0, $month, 1, $year)) . PHP_EOL;
    echo 'Пн' . ' ' . 'Вт' . ' ' . 'Ср' . ' ' . 'Чт' . ' ' . 'Пт' . ' ' . 'Сб' . ' ' . 'Вс' . PHP_EOL; 
    firstWeekDay($arMonthDay[1]);
    echo PHP_EOL; 
    workingDays($arMonthDay[2]);
    echo PHP_EOL; 
    workingDays($arMonthDay[3]);
    echo PHP_EOL; 
    workingDays($arMonthDay[4]);
    echo PHP_EOL;
    workingDays($arMonthDay[5]);
    echo PHP_EOL; 
    
}
getCalendarForMonth($month, $year);
?>
