<?php

try {

session_start();

    if($_SERVER["REQUEST_METHOD"] == "DELETE") {

        if(isset($_SESSION["horoscope"])) {

            unset($_SESSION["horoscope"]);
            echo json_encode(true);
            exit;

        } else {
            echo json_encode(false);
        }
}
}catch(Exception $php_errormsg) {
}
?>