<?php

class MyLogger
{
    public function log($level, $message)
    {
        switch ($level) {
            case 'warning':
                $this->warning($message);
                break;
            case 'error':
                $this->error($message);
                break;
            case 'info':
                $this->info($message);
                break;
            case 'debug':
                $this->debug($message);
                break;
        }
    }

    public function warning($message)
    {
        print_r('Warning:' . $message);
    }

    public function error($message)
    {
        print_r('Error:' . $message);
    }

    public function info($message)
    {
        print_r('Info:' . $message);
    }

    public function debug($message)
    {
        print_r('Debug:' . $message);
    }
}