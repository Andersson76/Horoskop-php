<?php
try {
session_start();

    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] == "GET") {
            if(isset($_SESSION["horoscope"])) {

                $horoscope = json_encode(unserialize($_SESSION["horoscope"]));
                echo $horoscope;
                exit;

            } else {
                echo json_encode(false);
                exit;
            }
        }
    } else {
        echo json_encode("Ingen giltig förfrågan.");
        exit;
    }
}catch(Exception $error) {
}
?>