<?php 


namespace primalog;

class logger {
    
    private $logger_dir = "logs";

    public static function WriteLog() {

        mkdir("logs");
    }
}