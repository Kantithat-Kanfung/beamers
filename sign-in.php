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


    .f-screen {
        height: 200px;
        width: 400px;

        position: fixed;
        top: 50%;
        left: 50%;
        margin-top: -100px;
        margin-left: -200px;
    }

    .btn {
        color: #fa5b0f;
        font-size: 18px;
        font-weight: 500;
        border: 1px solid #fa5b0f;
        background-color: transparent;
    }

    .btn:hover {
        color: #ffffff;
        background-color: #fa5b0f;
    }

    /* Moto G4 */
    @media (max-width: 360px) and (min-height: 640px) {
        .f-screen {
            clear: both;
            position: fixed;
            top: 35%;
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

<body style="background-color: whitesmoke;" class="w3-animate-opacity">
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
                <a class="nav-link text-secondary" href="sign-in.php">เข้าสู่ระบบ</a>
                <div class="vertical-line"></div>
                <a class="nav-link txt-create-account" href="create-account.php">สร้างบัญชีใหม่</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h5 class="text-center text-dark" style="margin-top: 2em;">เข้าสู่ระบบ</h5>
        <div class="f-screen">
            <form action="check-sign-in.php" method="post" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="username">ชื่อหรืออีเมลผู้ใช้งาน:</label>
                    <input type="text" class="form-control shadow-none" id="username" pattern="[A-Za-z]{5-50}" title="[A-Za-z]"
                        required name="username">
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">กรุณาระบุชื่อหรืออีเมลผู้ใช้งาน</div>
                </div>
                <div class="form-group">
                    <label for="password">รหัสผ่าน (อย่างน้อย 8 ตัว):</label>
                    <input type="password" class="form-control shadow-none" id="password" pattern=".{8,}" required name="password">
                    <div class="valid-feedback"></div>
                    <div class="invalid-feedback">กรุณาระบุรหัสผ่าน (อย่างน้อย 8 ตัว)</div>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> จดจำรหัสผ่านของฉัน</label>
                </div>
                <button type="submit" class="btn btn-md btn-block mt-3">ล็อคอิน</button>
            </form>
        </div>
    </div>

    <script>
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
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
                            <a class="text-dark" href="#"><u>คำถามที่พบบ่อย?<span class="text-warning">s</span></u></a>
                        </li>
                    </ul>
                </div>
                <div class="col-3 bg-white">
                    <ul class="nav justify-content-end">
                        <li class="nav-link">
                            <span class="text-dark"><b>ติดตามเรา</b></span>
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