<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "unicorn";

    $get_track_name1 = "";
    $get_track_name2 = "";
    $get_track_name3 = "";
    $get_track_name4 = "";
    $get_track_name5 = "";

    $get_track_milliseconds1 = "";
    $get_track_milliseconds2 = "";
    $get_track_milliseconds3 = "";
    $get_track_milliseconds4 = "";
    $get_track_milliseconds5 = "";

    try {
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT 
                    Name, 
                    FORMAT(Milliseconds / 60000, 2) AS Milliseconds
                FROM `track` LIMIT 5;";

        $result = $conn->query($sql);

        $stack_track_name = "";
        $stack_track_milliseconds = "";

        $array_track_Name = array();
        $array_track_Milliseconds = array();

        if ($result->num_rows > 0) 
        {
           while($row = $result->fetch_assoc()) 
           {
               $stack_track_name .= $row["Name"] . ", ";  
               $stack_track_milliseconds .= $row["Milliseconds"] . ", ";  
           }
        }
        else
        {
            echo "0 results";
        }

        array_push($array_track_Name, explode(',', $stack_track_name, 5));
        array_push($array_track_Milliseconds, explode(',', $stack_track_milliseconds, 5));

        $get_track_name1 = $array_track_Name[0][0];
        $get_track_name2 = $array_track_Name[0][1];
        $get_track_name3 = $array_track_Name[0][2];
        $get_track_name4 = $array_track_Name[0][3];
        $get_track_name5 = $array_track_Name[0][4];

        $get_track_Milliseconds1 = $array_track_Milliseconds[0][0];
        $get_track_Milliseconds2 = $array_track_Milliseconds[0][1];
        $get_track_Milliseconds3 = $array_track_Milliseconds[0][2];
        $get_track_Milliseconds4 = $array_track_Milliseconds[0][3];
        $get_track_Milliseconds5 = $array_track_Milliseconds[0][4];

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <script type="text/javascript" src="js/่js.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

    .search-group {
        margin-top: 1em;
    }

    .songs-group {
        margin-top: 1em;
    }
    
    p:hover{
        color: #ff6517;
    }


    /* Moto G4 */
    @media (max-width: 360px) and (min-height: 640px) {
        .frm-search {
            font-size: 16px;
        }

        .input-group {
            width: 325px;
        }

        #btn-search {
            font-size: 7px;
        }

        .section-main,
        h5 {
            font-size: 16px;
        }

        .section-track,
        h4 {
            font-size: 16px;
        }
    }

    /* Pixel 2 */
    @media (max-width: 411px) and (min-height: 731px) {
        .frm-search {
            font-size: 16px;
        }

        .input-group {
            width: 380px;
        }

        #btn-search {
            font-size: 7px;
        }

        .section-main,
        h5 {
            font-size: 16px;
        }

        .section-track,
        h4 {
            font-size: 16px;
        }
    }

    /* iPhon 5/SE */
    @media (max-width: 320px) and (min-height: 568px) {
        .frm-search {
            font-size: 16px;
        }

        #btn-search {
            font-size: 7px;
        }

        .section-main,
        h5 {
            font-size: 16px;
        }

        .section-track,
        h4 {
            font-size: 16px;
        }
    }


    /* iPhone 6/7/8 */
    @media (max-width: 375px) and (min-height: 667px) {
        .frm-search {
            font-size: 16px;
        }

        #btn-search {
            font-size: 7px;
        }

        .section-main,
        h5 {
            font-size: 16px;
        }

        .section-track,
        h4 {
            font-size: 16px;
        }
    }

    /* iPhone 6/7/8 Plus */
    @media (max-width: 414px) and (min-height: 736px) {
        .frm-search {
            font-size: 16px;
        }

        .input-group {
            width: 385px;
        }

        #btn-search {
            font-size: 7px;
        }

        .section-main,
        h5 {
            font-size: 16px;
        }

        .section-track,
        h4 {
            font-size: 16px;
        }
    }

    /* iPhone X */
    @media (max-width: 375px) and (min-height: 812px) {
        .frm-search {
            font-size: 16px;
        }

        .input-group {
            width: 345px;
        }

        #btn-search {
            font-size: 7px;
        }

        .section-main,
        h5 {
            font-size: 16px;
        }

        .section-track,
        h4 {
            font-size: 16px;
        }
    }

</style>

<body style="background-color: whitesmoke;" class="w3-animate-opacity">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">

        <a class="navbar-brand" href="index.php">
            <svg class="bi bi-soundwave" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color:#ff6517">
                <path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z" />
            </svg>
            <b>Beamer</b>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="home_sub.php">หน้าแรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="trending_sub.php">มาแรง (Trending)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="genre_sub.php">แนวเพลง</a>
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
        <div class="search-group">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control shadow-none frm-search" placeholder="ค้นหา เพลง, ศิลปิน, วงดนตรี, พอดแคสต์ ที่คุณชื่นชอบ" name="from-search">
                    <div class="input-group-append">
                        <button class="input-group-text" id="btn-search">
                            <svg class="bi bi-search text-dark" width="4em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="section-main">
            <h5 style="margin-top: 1em;">หน้าแรก</h5>
            <div class="row">
                <div class="col-12">
                    <div class="section-track">
                        <h4 class="text-center" style="font-size: 20px; background-color: #ff6517; color: #fff; padding: 5px;">แทรค
                        </h4>
                        <div class="row">
                            <div class="col-2" style="margin-top: 5px;">
                                <img src="" id="img-1" alt="" width="50px;" height="50px;">
                            </div>
                            <div class="col-8 text-left">
                                <audio id="myAudio1">
                                    <source src="songs/bensound-ukulele.mp3" type="audio/mpeg">
                                </audio>
                                <p style="font-size: 16px; margin-top: 20px; cursor: pointer;" onclick="playAudio1()">
                                    <?php 
                                        echo $get_track_name1;
                                    ?>
                                </p>
                            </div>
                            <div class="col-2 text-right mng-p-tag-song-time">
                                <p id="timeSong1" style="font-size: 16px;  margin-top: 20px;">
                                    <?php 
                                       echo $get_track_Milliseconds1;
                                    ?>
                                </p>
                                <div id="spinner-grow1" class="spinner-grow spinner-grow-sm" role="status" style="color: #ff6517; font-size: 16px;  margin-top: 20px;">
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2" style="margin-top: 5px;">
                                <img src="" id="img-2" alt="" width="50px;" height="50px;">
                            </div>
                            <div class="col-8 text-left">
                                <audio id="myAudio2">
                                    <source src="songs/bensound-rumble.mp3" type="audio/mpeg">
                                </audio>
                                <p style="font-size: 16px; margin-top: 20px; cursor: pointer;"  onclick="playAudio2()">
                                    <?php 
                                        echo $get_track_name2;
                                    ?>
                                </p>
                            </div>
                            <div class="col-2 text-right mng-p-tag-song-time">
                                <p id="timeSong2" style="font-size: 16px;  margin-top: 20px;">
                                    <?php 
                                       echo $get_track_Milliseconds2;
                                    ?>
                                </p>
                                <div id="spinner-grow2" class="spinner-grow spinner-grow-sm" role="status" style="color: #ff6517; font-size: 16px;  margin-top: 20px;">
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2" style="margin-top: 5px;">
                                <img src="" id="img-3" alt="" width="50px;" height="50px;">
                            </div>
                            <div class="col-8 text-left">
                                <audio id="myAudio3">
                                    <source src="songs/bensound-happyrock.mp3" type="audio/mpeg">
                                </audio>
                                <p style="font-size: 16px; margin-top: 20px; cursor: pointer;" onclick="playAudio3()">
                                    <?php 
                                        echo $get_track_name3;
                                    ?>
                                </p>
                            </div>
                            <div class="col-2 text-right mng-p-tag-song-time">
                                <p id="timeSong3" style="font-size: 16px;  margin-top: 20px;">
                                    <?php 
                                       echo $get_track_Milliseconds3;
                                    ?>
                                </p>
                                <div id="spinner-grow3" class="spinner-grow spinner-grow-sm" role="status" style="color: #ff6517; font-size: 16px;  margin-top: 20px;">
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2" style="margin-top: 5px;">
                                <img src="" id="img-4" alt="" width="50px;" height="50px;">
                            </div>
                            <div class="col-8 text-left">
                                <audio id="myAudio4">
                                    <source src="songs/bensound-clearday.mp3" type="audio/mpeg">
                                </audio>
                                <p style="font-size: 16px; margin-top: 20px; cursor: pointer;" onclick="playAudio4()">
                                    <?php 
                                        echo $get_track_name4;
                                    ?>
                                </p>
                            </div>
                            <div class="col-2 text-right mng-p-tag-song-time">
                                <p id="timeSong4" style="font-size: 16px;  margin-top: 20px;">
                                    <?php 
                                       echo $get_track_Milliseconds4;
                                    ?>
                                </p>
                                <div id="spinner-grow4" class="spinner-grow spinner-grow-sm" role="status" style="color: #ff6517; font-size: 16px;  margin-top: 20px;">
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-2" style="margin-top: 5px;">
                                <img src="" id="img-5" alt="" width="50px;" height="50px;">
                            </div>
                            <div class="col-8 text-left">
                                <audio id="myAudio5">
                                    <source src="songs/bensound-acousticbreeze.mp3" type="audio/mpeg">
                                </audio>
                                <p style="font-size: 16px; margin-top: 20px; cursor: pointer;" onclick="playAudio5()">
                                    <?php 
                                        echo str_replace(',', '', $get_track_name5);   
                                    ?>
                                </p>
                            </div>
                            <div class="col-2 text-right mng-p-tag-song-time">
                                <p id="timeSong5" style="font-size: 16px;  margin-top: 20px;">
                                    <?php 
                                       echo str_replace(',', '', $get_track_Milliseconds5);   
                                    ?>
                                </p>
                                <div id="spinner-grow5" class="spinner-grow spinner-grow-sm" role="status" style="color: #ff6517; font-size: 16px;  margin-top: 20px;">
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>

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
                                <span class="text-dark"><b>ติดตามเรา </b></span>
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

            var random1 = Math.floor(Math.random() * 19);
            var random2 = Math.floor(Math.random() * 19);
            var random3 = Math.floor(Math.random() * 19);
            var random4 = Math.floor(Math.random() * 19);
            var random5 = Math.floor(Math.random() * 19);

            document.getElementById("img-1").src = imgArr[random1];
            document.getElementById("img-2").src = imgArr[random2];           
            document.getElementById("img-3").src = imgArr[random3];
            document.getElementById("img-4").src = imgArr[random4];
            document.getElementById("img-5").src = imgArr[random5];

            var spinnerArr = ["#spinner-grow1", "#spinner-grow2", "#spinner-grow3", "#spinner-grow4", "#spinner-grow5",]
            
            for (let index = 0; index < spinnerArr.length; index++) {
                
                const element = spinnerArr[index];
                
                $(document).ready(function(){
                    $(element).hide();
                });
            }
            
            var count = 1;

            function playAudio1() 
            { 
                count += 1;

                let mp3 = document.getElementById("myAudio1");
                
                if (count % 2 == 0) {
                    
                    mp3.play();

                    $(document).ready(function()
                    {
                        $("#spinner-grow1").show();
                        $("#timeSong1").hide();
                    });
                }
                else
                {
                    mp3.pause();
                    
                    count = 1;

                    $(document).ready(function()
                    {
                        $("#spinner-grow1").hide();
                        $("#timeSong1").show();
                    });
                }

                mp3.addEventListener("ended", function() 
                {
                    $(document).ready(function()
                    {
                        $("#spinner-grow1").hide();
                        $("#timeSong1").show();
                    });
                });
            } 

            function playAudio2() { 
                
                count += 1;

                let mp3 = document.getElementById("myAudio2");
                
                if (count % 2 == 0) {
                    
                    mp3.play();

                    $(document).ready(function()
                    {
                        $("#spinner-grow2").show();
                        $("#timeSong2").hide();
                    });
                }
                else
                {
                    mp3.pause();
                    
                    count = 1;

                    $(document).ready(function()
                    {
                        $("#spinner-grow2").hide();
                        $("#timeSong2").show();
                    });
                }

                mp3.addEventListener("ended", function() 
                {
                    $(document).ready(function()
                    {
                        $("#spinner-grow2").hide();
                        $("#timeSong2").show();
                    });
                });
            } 

            function playAudio3() { 
                
                count += 1;

                let mp3 = document.getElementById("myAudio3");
                
                if (count % 2 == 0) {
                    
                    mp3.play();

                    $(document).ready(function()
                    {
                        $("#spinner-grow3").show();
                        $("#timeSong3").hide();
                    });
                }
                else
                {
                    mp3.pause();
                    
                    count = 1;

                    $(document).ready(function()
                    {
                        $("#spinner-grow3").hide();
                        $("#timeSong3").show();
                    });
                }

                mp3.addEventListener("ended", function() 
                {
                    $(document).ready(function()
                    {
                        $("#spinner-grow3").hide();
                        $("#timeSong3").show();
                    });
                }); 
            } 

            function playAudio4() { 
                
                count += 1;

                let mp3 = document.getElementById("myAudio4");
                
                if (count % 2 == 0) {
                    
                    mp3.play();

                    $(document).ready(function()
                    {
                        $("#spinner-grow4").show();
                        $("#timeSong4").hide();
                    });
                }
                else
                {
                    mp3.pause();
                    
                    count = 1;

                    $(document).ready(function()
                    {
                        $("#spinner-grow4").hide();
                        $("#timeSong4").show();
                    });
                }

                mp3.addEventListener("ended", function() 
                {
                    $(document).ready(function()
                    {
                        $("#spinner-grow4").hide();
                        $("#timeSong4").show();
                    });
                });
            } 

            function playAudio5() { 
                
                count += 1;

                let mp3 = document.getElementById("myAudio5");
                
                if (count % 2 == 0) {
                    
                    mp3.play();

                    $(document).ready(function()
                    {
                        $("#spinner-grow5").show();
                        $("#timeSong5").hide();
                    });
                }
                else
                {
                    mp3.pause();
                    
                    count = 1;

                    $(document).ready(function()
                    {
                        $("#spinner-grow5").hide();
                        $("#timeSong5").show();
                    });
                }

                mp3.addEventListener("ended", function() 
                {
                    $(document).ready(function()
                    {
                        $("#spinner-grow5").hide();
                        $("#timeSong5").show();
                    });
                });
            } 
        </script>
        
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
