<?php


function getHoroscope($birthday) {

   $horoskop = "";
   $dates = explode('-', $birthday);
   $month = $dates[1];
   $day = $dates[2];

   if ( ( $month == 3 && $day > 20 ) || ( $month == 4 && $day < 20 ) ) {
      $horoskop = "Väduren";
   }
   elseif ( ( $month == 4 && $day > 19 ) || ( $month == 5 && $day < 21 ) ) {
      $horoskop = "Oxen";
   }
   elseif ( ( $month == 5 && $day > 20 ) || ( $month == 6 && $day < 21 ) ) {
      $horoskop = "Tvillingarna";
   }
   elseif ( ( $month == 6 && $day > 20 ) || ( $month == 7 && $day < 23 ) ) {
      $horoskop = "Kräftan";
   }
   elseif ( ( $month == 7 && $day > 22 ) || ( $month == 8 && $day < 23 ) ) {
      $horoskop = "Lejonet";
   }
   elseif ( ( $month == 8 && $day > 22 ) || ( $month == 9 && $day < 23 ) ) {
      $horoskop = "Jungfrun";
   }
   elseif ( ( $month == 9 && $day > 22 ) || ( $month == 10 && $day < 23 ) ) {
      $horoskop = "Vågen";
   }
   elseif ( ( $month == 10 && $day > 22 ) || ( $month == 11 && $day < 22 ) ) {
      $horoskop = "Skorpionen";
   }
   elseif ( ( $month == 11 && $day > 21 ) || ( $month == 12 && $day < 22 ) ) {
      $horoskop = "Skytten";
   }
   elseif ( ( $month == 12 && $day > 21 ) || ( $month == 1 && $day < 20 ) ) {
      $horoskop = "Stenbocken";
   }
   elseif ( ( $month == 1 && $day > 19 ) || ( $month == 2 && $day < 19 ) ) {
      $horoskop = "Vattumannen";
   }
   elseif ( ( $month == 2 && $day > 18 ) || ( $month == 3 && $day < 21 ) ) {
      $horoskop = "Fiskarna";
   }
   return $horoskop;
}
?>