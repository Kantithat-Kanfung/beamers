<?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "unicorn";

    $user_custId = $_SESSION["user_id"];
    $current_dt = date("Y-m-d H:i:s");
    $user_adr = $_SESSION["user_address"];
    $user_cty = $_SESSION["user_city"];
    $user_sta = $_SESSION["user_state"];
    $user_cnt = $_SESSION["user_country"];
    $user_pos = $_SESSION["user_postalcode"];
    $user_total = "0.00";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) 
    {
      die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn,"utf8");

    $sql = "INSERT INTO invoice (
                                    CustomerId, 
                                    InvoiceDate, 
                                    BillingAddress,
                                    BillingCity,
                                    BillingState,
                                    BillingCountry,
                                    BillingPostalCode,
                                    total
                                )
                          VALUES (
                                    '$user_custId',
                                    '$current_dt',
                                    '$user_adr',
                                    '$user_cty',
                                    '$user_sta',
                                    '$user_cnt',
                                    '$user_pos',
                                    '$user_total'
                                )";

    if (mysqli_query($conn, $sql)) 
    {
      header("Location: payment.php");
    } 
    else 
    {
      echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>