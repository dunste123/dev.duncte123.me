<?php
session_start();

//$ip = md5($_SERVER['REMOTE_ADDR']);
//Because of my server settings I have to use HTTP_X_FORWARDED_FOR
$ip = md5(base64_encode($_SERVER['HTTP_X_FORWARDED_FOR']));
$bezoekers = 'data/bezoekers.txt';

$bezoekersBestand = fopen($bezoekers,"r");
$bezoekersDataInBestand = fgets($bezoekersBestand);
$bezoekersDataInArray = explode(',', $bezoekersDataInBestand);

$groet = "<h1>Welcome</h1>";

if (in_array($ip, $bezoekersDataInArray)){
    $groet = "<h1>Welcome Back</h1>";
}else{
    $bestandSchrijven = fopen($bezoekers,"w");
    fwrite($bestandSchrijven, $bezoekersDataInBestand.','.$ip);
    fclose($bestandSchrijven);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Visitor counter js</title>
    </head>
    <body>
        <?php echo $groet; ?>
        <h4>Total Visitors: <span id="counter"></span></h4>

        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(() => {
                refreshCounter();
                setInterval(refreshCounter, 10 * 1000);
            });
            function refreshCounter() {
                let counter = $("#counter");
                counter.load("data/bezoekers.txt", null, data => {
                    counter.text(data.split(",").length - 1)
                });
            }
        </script>
    </body>
</html>
