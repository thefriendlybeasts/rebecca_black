<?php

class Plugin_rebecca_black extends Plugin
{
    /**
     * Get a countdown to the specified date.
     * @author Curtis Blackwell
     * @return string The formatted countdown to the specified date.
     */
    public function index()
    {
        $to   = $this->fetchParam('to', 'Friday');
        $unit = $this->fetchParam('unit', 'days');

        switch ($unit) {
            case 'h':
            case 'hours':
                $divisor = 60 * 60;
                break;

            case 'm':
            case 'i':
            case 'minutes':
                $divisor = 60;
                break;

            case 's':
            case 'seconds':
                $divisor = 1;

            // Days.
            default:
                $divisor = 60 * 60 * 24;
                break;
        }

        $future    = strtotime($to);
        $now       = time();
        $countdown = $future - $now;


        return floor($countdown / $divisor);
    }





    /**
     * Outputs a YouTube iframe of the video.
     * @author Curtis Blackwell
     * @return string Youtube video iframe.
     */
    public function video()
    {
        return '<iframe width="560" height="315" src="https://www.youtube.com/embed/kfVsfOSbJY0" frameborder="0" allowfullscreen></iframe>';
    }
}
