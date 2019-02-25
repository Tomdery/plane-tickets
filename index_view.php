<?php

include "tickets.php";
include "index_post.php";

?>

<form action="" method="POST">


    <fieldset>
        <select name="flightNumber">
            <option>--Please select your flight number--</option>
            <?php foreach($flightNumber as $number): ?>
            <option><?=$number?></option>
            <?php endforeach;?>
        </select>
    </fieldset>
    <fieldset>
        <input type="text" name="personalNumber" placeholder="Personal Identification Number">
    </fieldset>
    <fieldset>
        <input type="text" name="firstName" placeholder="First name">
        <?php echo $firstNameError ?>
    </fieldset>
    <fieldset>
        <input type="text" name="secondName" placeholder="Last name">
    </fieldset>
    <fieldset>
        <select name="flightFrom">
            <option>--Please select where are you flying from--</option>
            <?php foreach($flightFrom as $from): ?>
                <option><?=$from?></option>
            <?php endforeach;?>
        </select>
    </fieldset>
    <fieldset>
        <select name="flightTo">
            <option>--Please select where are you flying from--</option>
            <?php foreach($flightTo as $to): ?>
                <option><?=$to?></option>
            <?php endforeach;?>
        </select>
    </fieldset>
    <fieldset>
        <input type="text" name="price" placeholder="Please enter your price..">
    <select name="luggage">
        <option>--Please select your luggage weight--</option>
        <?php foreach($luggage as $weight): ?>
            <option><?=$weight?></option>
        <?php endforeach;?>
    </select>
    </fieldset>
    <fieldset>
        <textarea name="comments" id="" cols="30" rows="3" placeholder="If you want to ask something, you can do it here.."></textarea>
    </fieldset>

    <fieldset>
    <button type="submit" name="submit">Print</button>
    </fieldset>

</form>