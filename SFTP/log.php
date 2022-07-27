<?php

class Log
{
    public static function info_log($message)
    {
        $current_timestamp = date("Y-m-d H:i:s");
        $log = "[$current_timestamp]: INFO LOG : $message\n";
        printf ($log);
    }

    public static function error_log($message)
    {
        $current_timestamp = date("Y-m-d H:i:s");
        $log = "[$current_timestamp]: ERROR LOG : $message\n";
        printf ($log);
    }
}