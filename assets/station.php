<?php
include ("config.php");

$result = mysqli_query($link, "SELECT * FROM users;");

while ($row = mysqli_fetch_array($result))
    {
    echo "<p class='infobox_data' id='infobox_temp'>" . $row['username'] . "</p>";
    }

mysqli_close($link);
?>