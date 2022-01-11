<?php
    $name = $_POST['name'];
    $email = (string) $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $link = $_POST['link'];

    writeDataFile ($name, $phone, $email, $message, $link);
    function writeDataFile ($name, $phone, $email, $message, $link) {
        date_default_timezone_set('Europe/Moscow');
        $path = $_SERVER['DOCUMENT_ROOT'] . '/files/bd/base.csv';
        $dateTime = date("Y-m-d");
        $str = array($dateTime, $name, $phone, $email, $message, $link);
        $fp = fopen($path, 'a');
        fputcsv($fp, $str, ';');
        fclose($fp);
    }
?>