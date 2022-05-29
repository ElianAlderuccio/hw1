<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "hw1");

    $sess = $_SESSION['id'];
    $picsrc = mysqli_real_escape_string($conn, $_GET['picsrc']);
    mysqli_query($conn, "INSERT INTO photo(id, photosrc) VALUES ('$sess', \"$picsrc\")");
    mysqli_close($conn);
?>