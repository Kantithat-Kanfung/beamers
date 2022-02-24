<?php
    session_start();

    include "track_music.php";

    if ($_SESSION["user_fname"] == "" || $_SESSION["user_lname"] == "") 
    {
        header("Location: index.php");   
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "unicorn";

    $conn = mysqli_connect($servername, $username, $password, $database);

    try {
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT MAX(invoiceId) AS invoiceId FROM `invoice`;";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
           while($row = $result->fetch_assoc()) 
           {
              $_SESSION["get_invoice_id"] = $row["invoiceId"];
           }
        }

        $conn->close();
    } 
    catch (Exception $e) 
    {
        // Show Message Error $e.    
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beamer - ชุมชนคนรักดนตรี</title>
    <link rel="shortcut icon" type="icon" href="img/icon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <script type="text/javascript" src="js/่js.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>

<style>
    .vertical-line {
        border-left: 1px solid #BFBFBF;
        height: 20px;
    }

    .txt-create-account {
        color: rgb(32, 29, 29);
    }

    .txt-create-account:hover {
        color: #ff6517;
    }


    .f-screen {
        height: 200px;
        width: 400px;
        position: fixed;
        top: 30%;
        left: 50%;
        margin-top: -100px;
        margin-left: -200px;
    }


    /* Moto G4 */
    @media (max-width: 360px) and (min-height: 640px) {
        .f-screen {
            clear: both;
            position: fixed;
            top: 30%;
            left: 50%;
            padding: 40px;
        }
    }

    /* Pixel 2 */
    @media (max-width: 411px) and (min-height: 731px) {
        .f-screen {
            clear: both;
            position: fixed;
            top: 35%;
            left: 50%;
            padding: 40px;
        }
    }

    /* iPhone 6/7/8 */
    @media (max-width: 375px) and (min-height: 667px) {
        .f-screen {
            clear: both;
            position: fixed;
            top: 35%;
            left: 50%;
            padding: 40px;
        }
    }

    /* iPhone 6/7/8 Plus */
    @media (max-width: 414px) and (min-height: 736px) {
        .f-screen {
            clear: both;
            position: fixed;
            top: 35%;
            left: 50%;
            padding: 40px;
        }
    }
</style>

<body style="background-color: whitesmoke;" class="w3-animate-opacity" onload="">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">

        <a class="navbar-brand" href="index.php">
            <svg class="bi bi-soundwave" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg" style="color:#ff6517">
                <path fill-rule="evenodd"
                    d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z" />
            </svg>
            <b>Beamer</b>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">หน้าแรก<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="trending.php">มาแรง (Trending)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="genre.php">แนวเพลง</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <a class="nav-link text-dark" href="#">
                    <?php echo $_SESSION["user_fname"] . " " . $_SESSION["user_lname"]; ?>
                </a>
                <div class="vertical-line"></div>
                <a class="nav-link txt-create-account" href="sign-out.php">ออกจากระบบ</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="f-screen">
            <form action="#insert_data_to_database">
                <div class="card text-center">
                    <div class="card-header" style="font-size: 16px"><b>การชำระเงิน</b></div>
                        <div class="card-body">
                          <img src="" id="img" alt="" width="100px;" height="100px;">
                          <div class="form-group"  style="margin-top: 10px">
                            <div class="row">
                              <div class="col-3  text-left"  style="margin-top: 5px; font-size: 12px;">
                                    <b>ชื่อเพลง</b>
                              </div>
                              <div class="col-9">
                                <input type="text" id=""class="form-control border-0 shadow-none" style="font-size: 12px; background-color: white;" 
                                value="<?php echo $_COOKIE["CookieTrackName"]; ?>">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-3  text-left"  style="margin-top: 5px; font-size: 12px;">
                                    <b>อัลบั้ม</b> 
                              </div>
                              <div class="col-9">
                                <input type="text" id=""class="form-control border-0 shadow-none" style="font-size: 12px; background-color: white;" 
                                value="<?php echo $_COOKIE["CookieTrackAlbum"]; ?>">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-3  text-left"  style="margin-top: 5px; font-size: 12px;">
                                    <b>ศิลปิน</b>
                              </div>
                              <div class="col-9">
                                <input type="text" id=""class="form-control border-0 shadow-none" style="font-size: 12px; background-color: white;" 
                                value="<?php echo $_COOKIE["CookieTrackArtist"]; ?>">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-3  text-left"  style="margin-top: 5px; font-size: 12px;">
                                    <b>ประเภท</b> 
                              </div>
                              <div class="col-9">
                                <input type="text" id=""class="form-control border-0 shadow-none" style="font-size: 12px; background-color: white;" 
                                value="<?php echo $_COOKIE["CookieTrackGenre"]; ?>">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-3  text-left"  style="margin-top: 5px; font-size: 12px;">
                                   <b>เวลา</b> 
                              </div>
                              <div class="col-9">
                                <input type="text" id=""class="form-control border-0 shadow-none" style="font-size: 12px; background-color: white;" 
                                value="<?php echo $_COOKIE["CookieTrackMilliseconds"]; ?>">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-3  text-left"  style="margin-top: 5px; font-size: 12px;">
                                    <b>ขนาดไฟล์</b>
                              </div>
                              <div class="col-6">
                                <input type="text" id=""class="form-control border-0 shadow-none" style="font-size: 12px; background-color: white;" 
                                value="<?php echo number_format($_COOKIE["CookieTrackBytes"], 2); ?>" readonly>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-3 text-left"  style="margin-top: 5px; font-size: 12px;">
                                    <b>ราคา</b>  
                              </div>
                              <div class="col-9">
                                <input type="text" id=""class="form-control border-0 shadow-none" style="font-size: 12px; background-color: white;" 
                                value="<?php echo $_COOKIE["CookieTrackUnitPrice"]; ?>" readonly>
                              </div>
                            </div>
                        </div>
                        <div id="paypal-button"></div>
                    </div>
                </div>
            <form>
        </div>
    </div>

    <script>
        var imgArr = [
                "img/img-song-1.jpg",
                "img/img-song-2.jpg",
                "img/img-song-3.jpg",
                "img/img-song-4.jpg",
                "img/img-song-5.jpg",
                "img/img-song-6.jpg",
                "img/img-song-7.jpg",
                "img/img-song-8.jpg",
                "img/img-song-9.jpg",
                "img/img-song-10.jpg",
                "img/img-song-11.jpg",
                "img/img-song-12.jpg",
                "img/img-song-13.jpg",
                "img/img-song-14.jpg",
                "img/img-song-15.jpg",
                "img/img-song-16.jpg",
                "img/img-song-17.jpg",
                "img/img-song-18.jpg",
                "img/img-song-19.jpg",
                "img/img-song-20.jpg"
            ]
            
            var num = Math.floor(Math.random() * 19);

            document.getElementById("img").src = imgArr[num];

            paypal.Button.render({
                // Configure environment
                env: 'sandbox',
                client: {
                    sandbox: 'AQ8TynBacmeMTIqy5JMI7w0qyqWSWaQnBxJbIWNogmWnVFZo0DzQuKmTO8T5HfdloG9BwxB9oQ0QWHr2',
                    production: ''
                    // sb-jhgh82729658@personal.example.com
                },
                // Customize button (optional)
                locale: 'en_US',
                style: {
                    size: 'medium',
                    color: 'gold',
                    shape: 'rect',
                },

                // Enable Pay Now checkout flow (optional)
                commit: true,

                // Set up a payment
                payment: function (data, actions) {
                    return actions.payment.create({
                        transactions: [{
                            amount: {
                                total: <?php echo $_COOKIE["CookieTrackUnitPrice"] ?>,
                                currency: 'USD'
                            }
                        }]
                    });
                },
                // Finalize the transaction
                onApprove: function (data, actions) {
                    return actions.order.capture().then(function (details) {
                        // Show a success message to the buyer
                        let a = confirm('Transaction completed by ' + details.payer.name.given_name + '!');
                        
                        if (a == true) {
                            location.href = "add-invoiceline.php";
                        }
                    });
                }
            }, '#paypal-button');  
            
    </script>

    <nav class="navbar-light bg-white navbar-expand-lg fixed-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 bg-white">
                    <ul class="nav justify-content-start">
                        <li class="nav-link">
                            <span class="text-dark">&copy;Beamer 2020</span>
                        </li>
                    </ul>
                </div>
                <div class="col-6 bg-white">
                    <ul class="nav justify-content-center">
                        <li class="nav-link">
                            <a class="text-dark" href="#"><u>นโยบายความเป็นส่วนตัว</u></a>
                        </li>
                        <li class="nav-link">
                            <a class="text-dark" href="#"><u>เกี่ยวกับเรา</u></a>
                        </li>
                        <li class="nav-link">
                            <a class="text-dark" href="#"><u>ข้อเสนอแนะ</u></a>
                        </li>
                        <li class="nav-link">
                            <a class="text-dark" href="#"><u>ติดต่อเรา</u></a>
                        </li>
                        <li class="nav-link">
                            <a class="text-dark" href="#"><u>คำถามที่พบบ่อย?</u></a>
                        </li>
                    </ul>
                </div>
                <div class="col-3 bg-white">
                    <ul class="nav justify-content-end">
                        <li class="nav-link">
                            <span class="text-dark"><b>ติดตามเรา  </b></span>
                            <a href="#" style="text-decoration: none;">
                                <img src="img/facebook.png" width="20px" height="20px" alt="icon-facebook">
                            </a>
                            <a href="#" style="text-decoration: none;">
                                <img src="img/instagram.png" width="20px" height="20px" alt="icon-instagram">
                            </a>
                            <a href="#" style="text-decoration: none;">
                                <img src="img/yb.png" width="20px" height="20px" alt="icon-youtube">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>