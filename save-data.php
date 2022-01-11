// записываем данные в файл
writeDataFile ($name, $phone, $email);
function writeDataFile ($name, $phone, $email) {
    date_default_timezone_set('Europe/Moscow');
    $path = $_SERVER['DOCUMENT_ROOT'] . '/media/files/bd/base.csv';
    $dateTime = date("Y-m-d");
    $str = array($dateTime, $name, $phone, $email);
    $fp = fopen($path, 'a');
    fputcsv($fp, $str, ';');
    fclose($fp);
}