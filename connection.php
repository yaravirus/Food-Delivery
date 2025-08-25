<?php
$link = mysqli_connect("bdoozd8hy9piw85hedya-mysql.services.clever-cloud.com","ueyrd2wkbbkrc1ma", "pg1LlQIIyLOs97MknM5l","",3306);
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($link, "bdoozd8hy9piw85hedya") or die("Database not found");

?>