<?php
$firstNameError = "";

if(isset($_POST['submit'])){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['flightNumber'])) {
            $firstNameError = "Iveskite vardą";
        }
        if (empty($_POST['personalNumber'])) {
            $firstNameError = "Iveskite vardą";
        }
        if (empty($_POST['firstName'])) {
            $firstNameError = "Iveskite vardą";
        }
        if (empty($_POST['secondName'])) {
            $firstNameError = "Iveskite vardą";
        }
        if (empty($_POST['flightFrom'])) {
            $firstNameError = "Iveskite vardą";
        }
        if (empty($_POST['flightTo'])) {
            $firstNameError = "Iveskite vardą";
        }
        if (empty($_POST['luggage'])) {
            $firstNameError = "Iveskite vardą";
        }
        if (empty($_POST['comments'])) {
            $commentsErr = 
        }
     if (!empty($_POST['firstName']))
     {
         $fp = fopen('results.json', 'w');
         fwrite($fp, json_encode($_POST));
         fclose($fp);
         header("location:index.html");
     }
    }


}