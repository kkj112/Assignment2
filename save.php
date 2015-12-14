$firstname = $_POST['first_name'];
setlocale(LC_TIME, "fi_FI"); 
date_default_timezone_set("Europe/Helsinki");
$date = strftime("%Y-%m-%d-%A");
$timesaved = strftime("%H:%M:%S");
$email = $_POST['email'];
$file = "saved/".$date.".txt";
$cont = 'time finished: '.$timesaved.' - email: '.$email.' - first name: '.$firstname.''. "n"; 

$f = fopen ($file, 'a+');
fwrite($f, $cont);
fclose($f);