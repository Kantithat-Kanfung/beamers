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

    $get_track_album1 = "";
    $get_track_album2 = "";
    $get_track_album3 = "";
    $get_track_album4 = "";
    $get_track_album5 = "";

    $get_track_artist1 = "";
    $get_track_artist2 = "";
    $get_track_artist3 = "";
    $get_track_artist4 = "";
    $get_track_artist5 = "";

    $get_track_genre1 = "";
    $get_track_genre2 = "";
    $get_track_genre3 = "";
    $get_track_genre4 = "";
    $get_track_genre5 = "";

    $get_track_mediatype1 = "";
    $get_track_mediatype2 = "";
    $get_track_mediatype3 = "";
    $get_track_mediatype4 = "";
    $get_track_mediatype5 = "";

    $get_track_milliseconds1 = "";
    $get_track_milliseconds2 = "";
    $get_track_milliseconds3 = "";
    $get_track_milliseconds4 = "";
    $get_track_milliseconds5 = "";

    $get_track_Bytes1 = "";
    $get_track_Bytes2 = "";
    $get_track_Bytes3 = "";
    $get_track_Bytes4 = "";
    $get_track_Bytes5 = "";

    $get_track_UnitPrice1 = "";
    $get_track_UnitPrice2 = "";
    $get_track_UnitPrice3 = "";
    $get_track_UnitPrice4 = "";
    $get_track_UnitPrice5 = "";

  try {
      $conn = mysqli_connect($servername, $username, $password, $database);
      
      if (!$conn) 
      {
          die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "
            SELECT
                track.Name AS trackName,
                album.Title AS albumTitle,
                artist.Name AS artistName,
                genre.Name AS genreName,
                mediatype.Name AS mediatypeName,
                FORMAT(track.Milliseconds / 60000, 2) AS trackMilliseconds,
                FORMAT((track.Bytes / 1000000),2) * 0.9537 AS trackBytes,
                track.UnitPrice AS trackUnitPrice
            FROM
                track
            LEFT JOIN 
                album ON album.AlbumId = track.AlbumId
            LEFT JOIN 
                artist ON artist.ArtistId = album.ArtistId
            LEFT JOIN 
                mediatype ON mediatype.MediaTypeId = track.MediaTypeId
            LEFT JOIN 
                genre ON genre.GenreId = track.GenreId
            WHERE
                track.TrackId IN (6, 7, 8, 9, 10)
            ORDER BY
                track.TrackId ASC;
        ";

      $result = $conn->query($sql);

      $stack_track_name = "";
      $stack_track_album = "";
      $stack_track_artist = "";
      $stack_track_genre = "";
      $stack_track_mediatype = "";
      $stack_track_milliseconds = "";
      $stack_track_bytes = "";
      $stack_track_unitPrice = "";
      
      $array_track_name = array();
      $array_track_album = array();
      $array_track_artist = array();
      $array_track_genre = array();
      $array_track_mediatype = array();
      $array_track_milliseconds = array();
      $array_track_bytes = array();
      $array_track_unitPrice = array();

      if ($result->num_rows > 0) 
      {
         while($row = $result->fetch_assoc()) 
         {
            $stack_track_name .= $row["trackName"] . ", ";
            $stack_track_album .= $row["albumTitle"] . ", ";
            $stack_track_artist .= $row["artistName"] . ", ";
            $stack_track_genre .= $row["genreName"] . ", ";
            $stack_track_mediatype .= $row["mediatypeName"] . ", ";  
            $stack_track_milliseconds .= $row["trackMilliseconds"] . ", ";
            $stack_track_bytes .= $row["trackBytes"] . ", ";  
            $stack_track_unitPrice .= $row["trackUnitPrice"] . ", ";
             
         }
      }
      else
      {
          echo "0 results";
      }

      array_push($array_track_name, explode(',', $stack_track_name, 5));
      array_push($array_track_album, explode(',', $stack_track_album, 5));
      array_push($array_track_artist, explode(',', $stack_track_artist, 5));
      array_push($array_track_genre, explode(',', $stack_track_genre, 5));
      array_push($array_track_mediatype, explode(',', $stack_track_mediatype, 5));
      array_push($array_track_milliseconds, explode(',', $stack_track_milliseconds, 5));
      array_push($array_track_bytes, explode(',', $stack_track_bytes, 5));
      array_push($array_track_unitPrice, explode(',', $stack_track_unitPrice, 5));

      $get_track_name1 = $array_track_name[0][0];
      $get_track_name2 = $array_track_name[0][1];
      $get_track_name3 = $array_track_name[0][2];
      $get_track_name4 = $array_track_name[0][3];
      $get_track_name5 = $array_track_name[0][4];

      $get_track_album1 = $array_track_album[0][0];
      $get_track_album2 = $array_track_album[0][1];
      $get_track_album3 = $array_track_album[0][2];
      $get_track_album4 = $array_track_album[0][3];
      $get_track_album5 = $array_track_album[0][4];

      $get_track_artist1 = $array_track_artist[0][0];
      $get_track_artist2 = $array_track_artist[0][1];
      $get_track_artist3 = $array_track_artist[0][2];
      $get_track_artist4 = $array_track_artist[0][3];
      $get_track_artist5 = $array_track_artist[0][4];

      $get_track_genre1 = $array_track_genre[0][0];
      $get_track_genre2 = $array_track_genre[0][1];
      $get_track_genre3 = $array_track_genre[0][2];
      $get_track_genre4 = $array_track_genre[0][3];
      $get_track_genre5 = $array_track_genre[0][4];

      $get_track_milliseconds1 = $array_track_milliseconds[0][0];
      $get_track_milliseconds2 = $array_track_milliseconds[0][1];
      $get_track_milliseconds3 = $array_track_milliseconds[0][2];
      $get_track_milliseconds4 = $array_track_milliseconds[0][3];
      $get_track_milliseconds5 = $array_track_milliseconds[0][4];

      $get_track_btyes1 = $array_track_bytes[0][0];
      $get_track_btyes2 = $array_track_bytes[0][1];
      $get_track_btyes3 = $array_track_bytes[0][2];
      $get_track_btyes4 = $array_track_bytes[0][3];
      $get_track_btyes5 = $array_track_bytes[0][4];

      $get_track_unitPrice1 = $array_track_unitPrice[0][0];
      $get_track_unitPrice2 = $array_track_unitPrice[0][1];
      $get_track_unitPrice3 = $array_track_unitPrice[0][2];
      $get_track_unitPrice4 = $array_track_unitPrice[0][3];
      $get_track_unitPrice5 = $array_track_unitPrice[0][4];
      
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
    <title>Beamer -ขุมชนคนรักดนตรี</title>
    <link rel="shortcut icon" type="icon" href="img/icon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
    <script type="text/javascript" src="js/่js.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

    .btn-free {
        background-color: #bfbfbf;
    }

    .btn-buy {
        background-color: #ff6517;
        color: #ffffff;
    }

    .btn-buy:hover {
        background-color: #fa5b0f;
        color: #ffffff;
    }

    p:hover {
        color: #fa5b0f;
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
    }

    /* iPhon 5/SE */
    @media (max-width: 320px) and (min-height: 568px) {
        .frm-search {
            font-size: 16px;
        }

        #btn-search {
            font-size: 7px;
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
        }
    }
</style>

<body style="background-color: whitesmoke;" class="w3-animate-opacity">
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
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
                    <a class="nav-link" href="home.php">หน้าแรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="trending.php">มาแรง (Trending)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="genre.php">แนวเพลง</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <a class="nav-link text-secondary" href="sign-in.php">เข้าสู่ระบบ</a>
                <div class="vertical-line"></div>
                <a class="nav-link txt-create-account" href="create-account.php">สร้างบัญชีใหม่</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="search-group" style="margin-top: 5em;">
            <form action="">
                <div class="input-group ip-grp">
                    <input type="text" class="form-control shadow-none f-ctrl"
                        placeholder="ค้นหา เพลง, ศิลปิน, วงดนตรี, พอดแคสต์ ที่คุณชื่นชอบ" name="from-search">
                    <div class="input-group-append">
                        <button class="input-group-text" id="btn-search">
                            <svg class="bi bi-search text-dark" width="4em" height="1em" viewBox="0 0 16 16"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd"
                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <h5 style="margin-top: 1em;margin-bottom: 1em;">มาแรง</h5>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-track">
                        <div class="row">
                            <div class="col-2" style="margin-top: 5px;">
                                <img src="" id="img-1" alt="" width="50px;" height="50px;">
                            </div>
                            <div class="col-7 text-left">
                                <audio id="myAudio1">
                                    <source src="songs/bensound-ukulele.mp3" type="audio/mpeg">
                                </audio>
                                <p style="font-size: 16px; margin-top: 20px; cursor: pointer;" onclick="playAudio1()">
                                    <?php 
                                        echo $get_track_name1;
                                    ?>
                                </p>
                            </div>
                            <div class="col-3 text-right">
                                <button id="bi-cart1" class="btn btn-outline-danger" style="margin-top: 10px;" data-toggle="modal" data-target="#myModal1">
                                    <svg width="1.15em" height="1.15em" viewBox="0 0 16 16" class="bi bi-cart2"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                </button>
                                <!-- The Modal ยืนยันการสั่งซื้อ -->
                                <div class="modal fade" id="myModal1">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title modal-title-center">กรุณายืนยันการสั่งซื้อ</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <div class="modal-body text-center">
                                        <?php 
                                            echo  "คุณต้องการซื้อเพลง " . "<b>" . $get_track_name1 . "</b>" . " หรือไม่?";
                                        ?>
                                            
                                      </div>
                                      <div class="modal-footer">
                                        <button id="btnOkConfirmed1" type="button" class="btn btn-success">ตกลง</button>
                                        <button id="btnCancel" type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button id="cart-check1" class="btn btn-success disabled" style="margin-top: 10px;">
                                    <svg width="1.15em" height="1.15em" viewBox="0 0 16 16" class="bi bi-cart-check"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </button>
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
                            <div class="col-7 text-left">
                                <audio id="myAudio2">
                                    <source src="songs/bensound-ukulele.mp3" type="audio/mpeg">
                                </audio>
                                <p style="font-size: 16px; margin-top: 20px; cursor: pointer;" onclick="playAudio2()">
                                    <?php 
                                        echo $get_track_name2;
                                    ?>
                                </p>
                            </div>
                            <div class="col-3 text-right">
                                <button id="bi-cart2" class="btn btn-outline-danger" style="margin-top: 10px;" data-toggle="modal" data-target="#myModal2">
                                    <svg width="1.15em" height="1.15em" viewBox="0 0 16 16" class="bi bi-cart2"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                </button>
                                <!-- The Modal ยืนยันการสั่งซื้อ -->
                                <div class="modal fade" id="myModal2">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title modal-title-center">กรุณายืนยันการสั่งซื้อ</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <div class="modal-body text-center">
                                        <?php 
                                            echo  "คุณต้องการซื้อเพลง " . "<b>" . $get_track_name2 . "</b>" . " หรือไม่?";
                                        ?>
                                            
                                      </div>
                                      <div class="modal-footer">
                                        <button id="btnOkConfirmed2" type="button" class="btn btn-success">ตกลง</button>
                                        <button id="btnCancel" type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button id="cart-check2" class="btn btn-success disabled" style="margin-top: 10px;">
                                    <svg width="1.15em" height="1.15em" viewBox="0 0 16 16" class="bi bi-cart-check"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </button>
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
                            <div class="col-7 text-left">
                                <audio id="myAudio3">
                                    <source src="songs/bensound-ukulele.mp3" type="audio/mpeg">
                                </audio>
                                <p style="font-size: 16px; margin-top: 20px; cursor: pointer;" onclick="playAudio3()">
                                    <?php 
                                        echo $get_track_name3;
                                    ?>
                                </p>
                            </div>
                            <div class="col-3 text-right">
                                <button id="bi-cart3" class="btn btn-outline-danger" style="margin-top: 10px;" data-toggle="modal" data-target="#myModal3">
                                    <svg width="1.15em" height="1.15em" viewBox="0 0 16 16" class="bi bi-cart2"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                </button>
                                <!-- The Modal ยืนยันการสั่งซื้อ -->
                                <div class="modal fade" id="myModal3">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title modal-title-center">กรุณายืนยันการสั่งซื้อ</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <div class="modal-body text-center">
                                        <?php 
                                            echo  "คุณต้องการซื้อเพลง " . "<b>" . $get_track_name3 . "</b>" . " หรือไม่?";
                                        ?>
                                            
                                      </div>
                                      <div class="modal-footer">
                                        <button id="btnOkConfirmed3" type="button" class="btn btn-success">ตกลง</button>
                                        <button id="btnCancel" type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button id="cart-check3" class="btn btn-success disabled" style="margin-top: 10px;">
                                    <svg width="1.15em" height="1.15em" viewBox="0 0 16 16" class="bi bi-cart-check"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </button>
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
                            <div class="col-7 text-left">
                                <audio id="myAudio4">
                                    <source src="songs/bensound-ukulele.mp3" type="audio/mpeg">
                                </audio>
                                <p style="font-size: 16px; margin-top: 20px; cursor: pointer;" onclick="playAudio4()">
                                    <?php 
                                        echo $get_track_name4;
                                    ?>
                                </p>
                            </div>
                            <div class="col-3 text-right">
                                <button id="bi-cart4" class="btn btn-outline-danger" style="margin-top: 10px;" data-toggle="modal" data-target="#myModal4">
                                    <svg width="1.15em" height="1.15em" viewBox="0 0 16 16" class="bi bi-cart2"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                </button>
                                <!-- The Modal ยืนยันการสั่งซื้อ -->
                                <div class="modal fade" id="myModal4">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title modal-title-center">กรุณายืนยันการสั่งซื้อ</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <div class="modal-body text-center">
                                        <?php 
                                            echo  "คุณต้องการซื้อเพลง " . "<b>" . $get_track_name4 . "</b>" . " หรือไม่?";
                                        ?>
                                            
                                      </div>
                                      <div class="modal-footer">
                                        <button id="btnOkConfirmed4" type="button" class="btn btn-success">ตกลง</button>
                                        <button id="btnCancel" type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button id="cart-check4" class="btn btn-success disabled" style="margin-top: 10px;">
                                    <svg width="1.15em" height="1.15em" viewBox="0 0 16 16" class="bi bi-cart-check"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </button>
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
                            <div class="col-7 text-left">
                                <audio id="myAudio5">
                                    <source src="songs/bensound-ukulele.mp3" type="audio/mpeg">
                                </audio>
                                <p style="font-size: 16px; margin-top: 20px; cursor: pointer;" onclick="playAudio5()">
                                    <?php 
                                         echo str_replace(',', '', $get_track_name5);
                                    ?>
                                </p>
                            </div>
                            <div class="col-3 text-right">
                                <button id="bi-cart5" class="btn btn-outline-danger" style="margin-top: 10px;" data-toggle="modal" data-target="#myModal5">
                                    <svg width="1.15em" height="1.15em" viewBox="0 0 16 16" class="bi bi-cart2"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                </button>
                                <!-- The Modal ยืนยันการสั่งซื้อ -->
                                <div class="modal fade" id="myModal5">
                                  <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title modal-title-center">กรุณายืนยันการสั่งซื้อ</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <div class="modal-body text-center">
                                        <?php 
                                            echo  "คุณต้องการซื้อเพลง " . "<b>" . str_replace(',', '', $get_track_name5) . "</b>" . " หรือไม่?";
                                        ?>
                                            
                                      </div>
                                      <div class="modal-footer">
                                        <button id="btnOkConfirmed5" type="button" class="btn btn-success">ตกลง</button>
                                        <button id="btnCancel" type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button id="cart-check5" class="btn btn-success disabled" style="margin-top: 10px;">
                                    <svg width="1.15em" height="1.15em" viewBox="0 0 16 16" class="bi bi-cart-check"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </button>
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

            var state = false;

            $(document).ready(function () 
            {
                $("#cart-check1").hide();
                $("#cart-check2").hide();
                $("#cart-check3").hide();
                $("#cart-check4").hide();
                $("#cart-check5").hide();
            });

            $(document).ready(function()
            {
                $(document).ready(function()
                {
                  $("#bi-cart1").click(function()
                  {
                    if (state == false) 
                    {
                        $('#myModal1').on('show.bs.modal', function (e) 
                        {
                            if (!data) return e.preventDefault();
                        });
                        
                        window.location.href = "sign-in.php";
                    }
                  });

                  $("#bi-cart2").click(function()
                  {
                    if (state == false) 
                    {
                        $('#myModal2').on('show.bs.modal', function (e) 
                        {
                            if (!data) return e.preventDefault();
                        });
                        
                        window.location.href = "sign-in.php";
                    }
                  });

                  $("#bi-cart3").click(function()
                  {
                    if (state == false) 
                    {
                        $('#myModal3').on('show.bs.modal', function (e) 
                        {
                            if (!data) return e.preventDefault();
                        });
                        
                        window.location.href = "sign-in.php";
                    }
                  });

                  $("#bi-cart4").click(function()
                  {
                    if (state == false) 
                    {
                        $('#myModal4').on('show.bs.modal', function (e) 
                        {
                            if (!data) return e.preventDefault();
                        });
                        
                        window.location.href = "sign-in.php";
                    }
                  });

                  $("#bi-cart5").click(function()
                  {
                    if (state == false) 
                    {
                        $('#myModal5').on('show.bs.modal', function (e) 
                        {
                            if (!data) return e.preventDefault();
                        });
                        
                        window.location.href = "sign-in.php";
                    }
                  });

                });
            });

            var spinnerArr = ["#spinner-grow1", "#spinner-grow2", "#spinner-grow3", "#spinner-grow4", "#spinner-grow5",]
            
            for (let index = 0; index < spinnerArr.length; index++) {
                
                const element = spinnerArr[index];
                
                $(document).ready(function(){
                    $(element).hide();
                });
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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