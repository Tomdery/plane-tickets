<?php
// making so errorMessage wouldn't be visible at first
$errorMessage = "";

if(isset($_POST['submit'])){

    // if server is has a request method that is equal to post, do stuff
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // if field is empty of posted object, change error message
        if (empty($_POST['personalNumber']) || empty($_POST['firstName']) || empty($_POST['secondName']) || empty($_POST['price'])) {
            $errorMessage = "Yra neužpildytų laukelių";
        }
        // if all of these fields are not empty, continue
     if (!empty($_POST['personalNumber']) && !empty($_POST['firstName']) &&
         !empty($_POST['secondName'] && !empty($_POST['price'])))
     {
         // if all of these dropdowns are not equal to "--Click and select*--", continue
         if($_POST['flightNumber'] !== "--Click and select*--" && $_POST['flightFrom'] !== "--Click and select*--" &&
             $_POST['flightTo'] !== "--Click and select*--" && $_POST['luggage'] !== "--Click and select*--")
         {
             // opens .json file, 'w' stands for write. then writes, and closes
             $fp = fopen('results.json', 'w');
             fwrite($fp, json_encode($_POST));
             fclose($fp);
             // redirects to main.html
             header("location:main.html");
         }
	else{
		$errorMessage = "Yra neužpildytų laukelių";
	}
     }
    }


}
