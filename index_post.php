<?php
$errorMessage = "";

if(isset($_POST['submit'])){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST)) {
            $errorMessage = "Būtinas laukelis";
        }

        if (empty($_POST['personalNumber'])) {
            $firstNameError = "Įveskite asmens kodą";
        }
        if (empty($_POST['firstName'])) {
            $firstNameError = "Iveskite vardą";
        }
        if (empty($_POST['secondName'])) {
            $firstNameError = "Iveskite pavardę";
        }
        if (empty($_POST['flightFrom'])) {
            $firstNameError = "Pasirinkite iš kur skrendate";
        }
        if (empty($_POST['flightTo'])) {
            $firstNameError = "Pasirinkite į kur skrendate";
        }
        if (empty($_POST['luggage'])) {
            $firstNameError = "Pasirinkite bagažo svorį";
        }
     if (!empty($_POST))
     {
         $fp = fopen('results.json', 'w');
         fwrite($fp, json_encode($_POST));
         fclose($fp);
         header("location:index.html");
     }
    }


}