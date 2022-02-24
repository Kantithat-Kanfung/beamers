<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "unicorn";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) 
    {
      die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn,"utf8");

    $firstname  = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $company = 'Microsoft Corporation';
    $address  = $_POST['address'];
    $city  = $_POST['city'];
    $state = 'WA';
    $country  = $_POST['country'];
    $postalcode  = $_POST['postalcode'];
    $phone  = $_POST['phone'];
    $fax  = $_POST['fax'];
    $email  = $_POST['email'];
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $SupportRepId = '1';

    $sql = "INSERT INTO Customer (
                                    FirstName, 
                                    LastName, 
                                    Company,
                                    Address,
                                    City,
                                    State,
                                    Country,
                                    PostalCode,
                                    Phone,
                                    Fax,
                                    Email,
                                    Username,
                                    Password,
                                    SupportRepId
                                )
                          VALUES (
                                    '$firstname', 
                                    '$lastname',
                                    '$company', 
                                    '$address', 
                                    '$city', 
                                    '$state', 
                                    '$country', 
                                    '$postalcode', 
                                    '$phone', 
                                    '$fax', 
                                    '$email',
                                    '$username',
                                    '$password',
                                    '$SupportRepId'
                                )";

    if (mysqli_query($conn, $sql)) 
    {
      header("Location: sign-in.php");
    } 
    else 
    {
      echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>