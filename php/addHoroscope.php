<?php

try {

session_start();

require("list.php");

    if($_SERVER["REQUEST_METHOD"]) {

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            if(!isset($_SESSION["horoscope"])) {

                $_SESSION["horoscope"] = serialize(getHoroscope($_POST["date"]));
                    echo json_encode(true);
                    exit;

            } else {
                echo json_encode(false. "Det finns redan ett horoskop sparat.");
                exit;
            }
        }
    } else {
        echo json_encode("Ingen giltig förfrågan");
    }
} catch(Exception $error) {
}
?>