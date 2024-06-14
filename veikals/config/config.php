<?php
class ConfigReader {
    private $config;

    public function __construct($filePath) {
        $this->config = parse_ini_file($filePath, true);
    }

    public function getValue($section, $variable) {
        return $this->config[$section][$variable];
    }
}
//class   ConfigReader {
//    private $config;
//
//
//function ini_array () {
//    $ini = parse_ini_file("config.ini", true);
//    print_r($ini);
//}
//    ini_array();
//
//}
?>