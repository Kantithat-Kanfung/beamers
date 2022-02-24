<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "unicorn";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn,"utf8");

    $get_inv_id = $_SESSION["get_invoice_id"];
    $get_ck_id = $_COOKIE["CookieTrackId"];
    $get_ck_pri = $_COOKIE["CookieTrackUnitPrice"];

    $_SESSION["song"] = $_COOKIE["CookieTrackId"];
            
    $sql = "INSERT INTO `invoiceline`(`InvoiceId`, `TrackId`, `UnitPrice`, `Quantity`) VALUES ('$get_inv_id', '$get_ck_id', '$get_ck_pri', '1')";

    if (mysqli_query($conn, $sql)) 
    {
        header("Location: user_play_music.php");
    } 
    else 
    {
        echo "Error: " . mysqli_error($conn);
    }

?>