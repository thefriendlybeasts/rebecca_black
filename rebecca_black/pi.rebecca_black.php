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
                break;

            case 'ms':
            case 'milliseconds':
                $divisor = 1/1000;
                break;

            // Days.
            default:
                $divisor = 60 * 60 * 24;
                break;
        }

        $s = $this->core->getSecondsUntil($to);


        return intval($s / $divisor);
    }




    public function countdown()
    {
        $to   = $this->fetchParam('to', 'Friday');
        $unit = $this->fetchParam('unit', 'days');

        $s = $this->core->getSecondsUntil($to);

        switch ($unit) {
            // Days
            default:
                $countdown['ms'] = $s * 1000;
                $countdown['s']  = intval($s                 % 60);
                $countdown['m']  = intval($s / 60)           % 60;
                $countdown['h']  = intval($s / (60 * 60)     % 24);
                $countdown['d']  = intval($s / (60 * 60 * 24));
                break;
        }


        return Parse::template($this->content, $countdown);
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
