<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class MysqlDate
{
    /**
     * Get the current month from MySQL.
     *
     * @return int
     */
    public static function getCurrentMonth()
    {
        return (int) DB::select("SELECT MONTH(NOW()) as currentMonth")[0]->currentMonth;
    }

    /**
     * Get the current day from MySQL.
     *
     * @return int
     */
    public static function getCurrentDay()
    {
        return (int) DB::select("SELECT DAY(NOW()) as currentDay")[0]->currentDay;
    }

    /**
     * Get the current year from MySQL.
     *
     * @return int
     */
    public static function getCurrentYear()
    {
        return (int) DB::select("SELECT YEAR(NOW()) as currentYear")[0]->currentYear;
    }

    /**
     * Get the current week from MySQL.
     *
     * @return int
     */
    public static function getCurrentWeek()
    {
        return (int) DB::select("SELECT WEEK(NOW()) as currentWeek")[0]->currentWeek;
    }

    public static function getCurrentDate()
    {
        return DB::select("SELECT NOW() as currentDate")[0]->currentDate;
    }

    /* public static function getRangeWeek($week, $year) {
        return DB::select("SELECT DATE_ADD(?, INTERVAL (? - 1) WEEK) as startOfWeek,
                    DATE_ADD(?, INTERVAL (? - 1) WEEK) + INTERVAL 6 DAY as endOfWeek", [$year.'-01-01', $week, $year.'-01-01', $week])[0];
    } */

}
