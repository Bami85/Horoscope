

<?php

session_start();

require 'countHoroscope.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    parse_str(file_get_contents("php://input"), $_POST);

    $currentHoroscope = countHoroscope($_POST["birthday"]);

    if (isset($_SESSION["horoscope"])) {
        if (($currentHoroscope != "inget datum angivet") && ($currentHoroscope != "Inget horoskop hittat"))
        {
            $_SESSION["horoscope"] = $currentHoroscope;
            echo json_encode(true);
        }
    } else {
        echo json_encode(false);
    }
} else {
    http_response_code(400);
}

?>
