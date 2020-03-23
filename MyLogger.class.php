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

    private function logWithTime($message)
    {
        return '[' . date('Y-m-d H:i', time()) . '] ' . $message;
    }

    public function warning($message)
    {
        print_r($this->logWithTime('Warning: ' . $message));
    }

    public function error($message)
    {
        print_r($this->logWithTime('Error: ' . $message));
    }

    public function info($message)
    {
        print_r($this->logWithTime('Info: ' . $message));
    }

    public function debug($message)
    {
        print_r($this->logWithTime('Debug: ' . $message));
    }
}

$logger = new MyLogger();
$logger->log('warning', 'Bla Bla');