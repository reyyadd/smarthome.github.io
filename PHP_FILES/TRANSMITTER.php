<?php
if (isset($_GET['status']) && ($_GET['status'] === 'LED_ON')) {
    $status = '8';
    $filePath = "../TEXT_FILES/TRANSMITTER.txt";
    $myfile = fopen($filePath, "a");
    chmod($myfile,0777);
    fwrite($myfile, $status . PHP_EOL);
    fclose($myfile);
} elseif (isset($_GET['status']) && ($_GET['status'] === 'LED_OFF')) {
    $status = '7';
    $filePath = "../TEXT_FILES/TRANSMITTER.txt";
    $myfile = fopen($filePath, "a");
    chmod($myfile,0777);
    fwrite($myfile, $status . PHP_EOL);
    fclose($myfile);
} elseif (isset($_GET['status']) && ($_GET['status'] === 'AC_ON')) {
    $status = '6';
    $filePath = "../TEXT_FILES/TRANSMITTER.txt";
    $myfile = fopen($filePath, "a");
    chmod($myfile,0777);
    fwrite($myfile, $status . PHP_EOL);
    fclose($myfile);
} elseif (isset($_GET['status']) && ($_GET['status'] === 'AC_OFF')) {
    $status = '5';
    $filePath = "../TEXT_FILES/TRANSMITTER.txt";
    $myfile = fopen($filePath, "a");
    chmod($myfile,0777);
    fwrite($myfile, $status . PHP_EOL);
    fclose($myfile);
} elseif (isset($_GET['status']) && ($_GET['status'] === 'FAN_ON')) {
    $status = '4';
    $filePath = "../TEXT_FILES/TRANSMITTER.txt";
    $myfile = fopen($filePath, "a");
    chmod($myfile,0777);
    fwrite($myfile, $status . PHP_EOL);
    fclose($myfile);
} elseif (isset($_GET['status']) && ($_GET['status'] === 'FAN_OFF')) {
    $status = '3';
    $filePath = "../TEXT_FILES/TRANSMITTER.txt";
    $myfile = fopen($filePath, "a");
    chmod($myfile,0777);
    fwrite($myfile, $status . PHP_EOL);
    fclose($myfile);
}
