<?php

try {

session_start();

require("list.php");

    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            if(isset($_POST["date"])) {
                if(isset($_SESSION["horoscope"])) {

                    $_SESSION["horoscope"] = serialize(getHoroscope($_POST["date"]));
                    echo json_encode(unserialize($_SESSION["horoscope"]));
                }
            } else {
                echo json_encode(false);
            }
        }
    }
} catch(Exception $error) {
}
?>