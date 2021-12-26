


<?php

session_start();

require 'countHoroscope.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentHoroscope = countHoroscope($_POST["birthday"]);
    
    if (isset($_SESSION["horoscope"])) {
        echo json_encode(false);
    } else {
        if (($currentHoroscope != "inget datum angivet") && ($currentHoroscope != "Inget horoskop hittat"))
        {
            $_SESSION["horoscope"] = $currentHoroscope;
            echo json_encode(true);
        }
    }
} else {
    http_response_code(400);
}

?>

