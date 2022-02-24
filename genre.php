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

    .btn-buy:hover {
        background-color: #FA5B0F;
        color: #ffffff;
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

        .col-4,
        .rnd-img-1,
        .rnd-img-2,
        .rnd-img-3,
        .rnd-img-4,
        .rnd-img-5,
        .rnd-img-6,
        .rnd-img-7,
        .rnd-img-8,
        .rnd-img-9,
        .rnd-img-10,
        .rnd-img-11,
        .rnd-img-12 {
            width: 50px;
            height: 50px;
        }


        p {
            font-size: 10px;
        }
    }

    /* Pixel 2 */
    @media (max-width: 411px) and (min-height: 731px) {
        .frm-search {
            font-size: 16px;
        }

        .input-group {
            width: 325px;
        }

        #btn-search {
            font-size: 7px;
        }

        .col-4,
        .rnd-img-1,
        .rnd-img-2,
        .rnd-img-3,
        .rnd-img-4,
        .rnd-img-5,
        .rnd-img-6,
        .rnd-img-7,
        .rnd-img-8,
        .rnd-img-9,
        .rnd-img-10,
        .rnd-img-11,
        .rnd-img-12 {
            width: 50px;
            height: 50px;
        }


        p {
            font-size: 10px;
        }
    }

    /* iPhone 6/7/8 */
    @media (max-width: 375px) and (min-height: 667px) {
        .frm-search {
            font-size: 16px;
        }

        .input-group {
            width: 345px;
        }

        #btn-search {
            font-size: 7px;
        }

        .col-4,
        .rnd-img-1,
        .rnd-img-2,
        .rnd-img-3,
        .rnd-img-4,
        .rnd-img-5,
        .rnd-img-6,
        .rnd-img-7,
        .rnd-img-8,
        .rnd-img-9,
        .rnd-img-10,
        .rnd-img-11,
        .rnd-img-12 {
            width: 50px;
            height: 50px;
        }


        p {
            font-size: 10px;
        }
    }

    /* iPhone 6/7/8 Plus */
    @media (max-width: 414px) and (min-height: 736px) {
        .frm-search {
            font-size: 16px;
        }

        .input-group {
            width: 375px;
        }

        #btn-search {
            font-size: 7px;
        }

        .col-4,
        .rnd-img-1,
        .rnd-img-2,
        .rnd-img-3,
        .rnd-img-4,
        .rnd-img-5,
        .rnd-img-6,
        .rnd-img-7,
        .rnd-img-8,
        .rnd-img-9,
        .rnd-img-10,
        .rnd-img-11,
        .rnd-img-12 {
            width: 50px;
            height: 50px;
        }


        p {
            font-size: 10px;
        }
    }

    /* iPhone X */
    @media (max-width: 375px) and (min-height: 812px) {
        .frm-search {
            font-size: 16px;
        }

        .input-group {
            width: 325px;
        }

        #btn-search {
            font-size: 7px;
        }

        .col-4,
        .rnd-img-1,
        .rnd-img-2,
        .rnd-img-3,
        .rnd-img-4,
        .rnd-img-5,
        .rnd-img-6,
        .rnd-img-7,
        .rnd-img-8,
        .rnd-img-9,
        .rnd-img-10,
        .rnd-img-11,
        .rnd-img-12 {
            width: 50px;
            height: 50px;
        }


        p {
            font-size: 10px;
        }
    }
</style>

<body style="background-color: whitesmoke;" onload="displayImageSectionPlaylist()" class="w3-animate-opacity">
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
                <div class="input-group">
                    <input type="text" class="form-control shadow-none"
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

        <h5 style="margin-top: 1em;margin-bottom: 1em;">แนวเพลง</h5>

        <div class="container">
            <div class="section-playlist">
                <div class="row">
                    <div class="col-4 text-center">
                        <img src="#" id="rnd-img-1" alt="" style="width: 50px; height: 50px;" data-toggle="tooltip"
                            title="Rock">
                    </div>
                    <div class="col-4 text-center">
                        <img src="#" id="rnd-img-2" alt="" style="width: 50px; height: 50px;" data-toggle="tooltip"
                            title="Jazz">
                    </div>
                    <div class="col-4 text-center">
                        <img src="#" id="rnd-img-3" alt="" style="width: 50px; height: 50px;" data-toggle="tooltip"
                            title="Alternative & Punk">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 text-center">
                        <p style="cursor: pointer;" onclick="">Rock</p>
                    </div>
                    <div class="col-4 text-center">
                        <p style="cursor: pointer;" onclick="">Jazz</p>
                    </div>
                    <div class="col-4 text-center">
                        <p style="cursor: pointer;" onclick="">Alternative & Punk</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 text-center">
                        <img src="#" id="rnd-img-4" alt="" style="width: 50px; height: 50px;" data-toggle="tooltip"
                            title="Easy Listening">
                    </div>
                    <div class="col-4 text-center">
                        <img src="#" id="rnd-img-5" alt="" style="width: 50px; height: 50px;" data-toggle="tooltip"
                            title="Blues">
                    </div>
                    <div class="col-4 text-center">
                        <img src="#" id="rnd-img-6" alt="" style="width: 50px; height: 50px;" data-toggle="tooltip"
                            title="Metal">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 text-center">
                        <p style="cursor: pointer;" onclick="">Easy Listening</p>
                    </div>
                    <div class="col-4 text-center">
                        <p style="cursor: pointer;" onclick="">Blues</p>
                    </div>
                    <div class="col-4 text-center">
                        <p style="cursor: pointer;" onclick="">Metal</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 text-center">
                        <img src="#" id="rnd-img-7" alt="" style="width: 50px; height: 50px;" data-toggle="tooltip"
                            title="Heavy Metal">
                    </div>
                    <div class="col-4 text-center">
                        <img src="#" id="rnd-img-8" alt="" style="width: 50px; height: 50px;" data-toggle="tooltip"
                            title="Hip Hop/Rap">
                    </div>
                    <div class="col-4 text-center">
                        <img src="#" id="rnd-img-9" alt="" style="width: 50px; height: 50px;" data-toggle="tooltip"
                            title="Electronica/Danc">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 text-center">
                        <p style="cursor: pointer;" onclick="">Heavy Metal</p>
                    </div>
                    <div class="col-4 text-center">
                        <p style="cursor: pointer;" onclick="">Hip Hop/Rap</p>
                    </div>
                    <div class="col-4 text-center">
                        <p style="cursor: pointer;" onclick="">Electronica/Dancance</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 text-center">
                        <img src="#" id="rnd-img-10" alt="" style="width: 50px; height: 50px;" data-toggle="tooltip"
                            title="Classical">
                    </div>
                    <div class="col-4 text-center">
                        <img src="#" id="rnd-img-11" alt="" style="width: 50px; height: 50px;" data-toggle="tooltip"
                            title="Opera">
                    </div>
                    <div class="col-4 text-center">
                        <img src="#" id="rnd-img-12" alt="" style="width: 50px; height: 50px;" data-toggle="tooltip"
                            title="Bossa Nova">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 text-center">
                        <p style="cursor: pointer;" onclick="">Classical</p>
                    </div>
                    <div class="col-4 text-center">
                        <p style="cursor: pointer;" onclick="">Opera</p>
                    </div>
                    <div class="col-4 text-center">
                        <p style="cursor: pointer;" onclick="">Bossa Nova</p>
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

            var idArr = [
                "rnd-img-1",
                "rnd-img-2",
                "rnd-img-3",
                "rnd-img-4",
                "rnd-img-5",
                "rnd-img-6",
                "rnd-img-7",
                "rnd-img-8",
                "rnd-img-9",
                "rnd-img-10",
                "rnd-img-11",
                "rnd-img-12"
            ]

            for (let index = 0; index < idArr.length; index++) {
                let num = Math.floor(Math.random() * 19);
                document.getElementById(idArr[index]).src = imgArr[num];
            }

            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>

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