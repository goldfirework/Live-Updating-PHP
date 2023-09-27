<?php

session_start();
include ("config.php");

$id = $_SESSION["id"];

$result = mysqli_query($link, "SELECT * FROM users WHERE id='" . $id . "';");

while ($row = mysqli_fetch_array($result))
    {
    echo "<p class='infobox_data' id='infobox_temp'>" . $row['username'] . "</p>";
    }

mysqli_close($link);
?>