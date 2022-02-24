<?php
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "unicorn";

    try {
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $username  = $_POST['username'];
        $password  = $_POST['password'];

        $sql = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
           while($row = $result->fetch_assoc()) 
           {
              $_SESSION["user_id"] = $row["CustomerId"];
              $_SESSION["user_fname"] = $row["FirstName"];
              $_SESSION["user_lname"] = $row["LastName"];
              $_SESSION["user_address"] = $row["Address"];
              $_SESSION["user_city"] = $row["City"];
              $_SESSION["user_state"] = $row["State"];
              $_SESSION["user_country"] = $row["Country"];
              $_SESSION["user_postalcode"] = $row["PostalCode"];
           }
        }
        else
        {
            echo "<script>alert('Username or Password Incorrect!');</script>";
        }

        if ($_SESSION["user_id"] != "") {
            header("Location: user.php");
        }


        $conn->close();
    } 
    catch (Exception $e) 
    {
        // Show Message Error $e.    
    }
?>