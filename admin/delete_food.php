<?php
include __DIR__ ."../connection.php";
$id=$_GET["id"];
mysqli_query($link,"DELETE FROM food WHERE id=$id");

?>
<script type="text/javascript">
 window.location = "display_food.php";                   
</script>