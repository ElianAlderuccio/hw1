<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "hw1");

    $sess = $_SESSION['id'];
    $picsrc = mysqli_real_escape_string($conn, $_GET['picsrc']);
    mysqli_query($conn, "DELETE FROM photo WHERE photosrc = '$picsrc' AND id= '$sess'");
    mysqli_close($conn);
?>