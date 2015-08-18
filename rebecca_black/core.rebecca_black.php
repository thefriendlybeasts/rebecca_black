<?php

class Core_rebecca_black extends Core
{
    /**
     * Get the number of seconds until a given time.
     * @author Curtis Blackwell
     * @param  string  $time A date/time string.
     *                       See http://php.net/manual/en/datetime.formats.php.
     * @return integer       The number of seconds until the specified time.
     */
    public function getSecondsUntil($time)
    {
        $future = strtotime($time);
        $now    = time();


        return $future - $now;
    }
}
