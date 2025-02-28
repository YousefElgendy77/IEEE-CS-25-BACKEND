<?php
$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "The Request Method Is Post And Username Is Osama" . '<br>';
    if ($_POST['user'] == in_array($_POST['user'], $admins)) {
        echo "This Username " . $_POST['user'] . " Is Admin";
    }
}


// Input Name "Osama"

// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"
?>
<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
</form>