<?php
include_once('duomenu baze.php');
$sql = "DELETE FROM registracija WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Ištrinta sėkmingai iš duomenų bazės";
    header( "refresh:1;url=adminlogai.php" );
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);




?>