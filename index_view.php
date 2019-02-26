<?php

include "tickets.php";
include "index_post.php";

?>

<form action="" method="POST">

    <fieldset>
        <p>Užpildykite visus su žvaigžtute ( * ) esančius laukelius</p>
    </fieldset>
    <fieldset>
        <select name="flightNumber">
            <option>--Click and select*--</option>
            <!-- dropdown from php array (tickets.php)-->
            <?php foreach($flightNumber as $number): ?>
            <option><?=$number?></option>
            <?php endforeach;?>
        </select>
        <!-- if it's not filled, after submit this changes to error message (now it's empty) -->
    </fieldset>
    <fieldset>
        <input type="text" name="personalNumber" placeholder="Personal Identification Number*">
    </fieldset>
    <fieldset>
        <input type="text" name="firstName" placeholder="First name*">
    </fieldset>
    <fieldset>
        <input type="text" name="secondName" placeholder="Last name*">
    </fieldset>
    <fieldset>
        <select name="flightFrom">
            <option>--Click and select*--</option>
            <?php foreach($flightFrom as $from): ?>
                <option><?=$from?></option>
            <?php endforeach;?>
        </select>
    </fieldset>
    <fieldset>
        <select name="flightTo">
            <option>--Click and select*--</option>
            <?php foreach($flightTo as $to): ?>
                <option><?=$to?></option>
            <?php endforeach;?>
        </select>
    </fieldset>
    <fieldset>
        <input type="text" name="price" placeholder="Please enter your price*">
    <select name="luggage">
        <option>--Click and select*--</option>
        <?php foreach($luggage as $weight): ?>
            <option><?=$weight?></option>
        <?php endforeach;?>
    </select>
    </fieldset>
    <fieldset>
        <textarea name="comments" id="" cols="30" rows="3" placeholder="If you want to ask something, you can do it here.."></textarea>
    </fieldset>

	<fieldset>
	<?php echo $errorMessage?>
	</fieldset>

    <fieldset>
    <button type="submit" name="submit">Print</button>
    </fieldset>

</form>
