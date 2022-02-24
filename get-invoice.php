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

        $sql = "SELECT MAX(invoiceId) FROM `invoice`;";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
           while($row = $result->fetch_assoc()) 
           {
              $_SESSION["invoice_id"] = $row["InvoiceId"];
           }
        }

        header("Location: payment.php");
        
        $conn->close();
    } 
    catch (Exception $e) 
    {
        // Show Message Error $e.    
    }
?>