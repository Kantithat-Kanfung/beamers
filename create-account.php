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

        #firstname::placeholder,
        #lastname::placeholder,
        #address::placeholder,
        #city::placeholder,
        #country::placeholder,
        #postalcode::placeholder,
        #phone::placeholder,
        #fax::placeholder,
        #email::placeholder,
        #username::placeholder,
        #password::placeholder {
            color: #BFBFBF;
        }

        /* Moto G4 */
        @media (max-width: 360px) and (min-height: 640px) {
            .container {
                margin-bottom: 230px;
            }
        }

        /* Pixel 2 */
        @media (max-width: 411px) and (min-height: 731px) {
            .container {
                margin-bottom: 230px;
            }
        }

        /* iPhon 5/SE */
        @media (max-width: 320px) and (min-height: 568px) {}

        /* iPhone 6/7/8 */
        @media (max-width: 375px) and (min-height: 667px) {
            .container {
                margin-bottom: 230px;
            }
        }

        /* iPhone 6/7/8 Plus */
        @media (max-width: 414px) and (min-height: 736px) {
            .container {
                margin-bottom: 230px;
            }
        }

        /* iPhone X */
        @media (max-width: 375px) and (min-height: 812px) {}
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
        <h5 class="text-center text-dark" style="margin-top: 2em;">สร้างบัญชี</h5>
        <form action="check-create-account.php" method="post" class="form-horizontal needs-validation" role="form" style="margin-top: 1em;" novalidate>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="firstname" class="text-left">ชื่อ <span style="color: red;">*</span></label>
                        <div>
                            <input type="text" class="form-control shadow-none" id="firstname" placeholder="ยงยุด"
                                pattern="[A-Za-z]{5-50}" title="[A-Za-z]" name="firstname" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">กรุณาระบุชื่อของคุณ</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="lastname" class="text-left">นามสกุล <span style="color: red;">*</span></label>
                        <div>
                            <input type="text" class="form-control shadow-none" id="lastname" placeholder="ยอดยิ่ง"
                                pattern="[A-Za-z]{5-50}" title="[A-Za-z]" name="lastname" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">กรุณาระบุนามสกุลของคุณ</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="address" class="text-left">ที่อยู่ (ปัจจุบัน)</label>
                        <div>
                            <input type="text" class="form-control shadow-none" id="address" placeholder="บ้านหนองปลาดุก ต.หอยขม อ.ปลวกแดง" name="address">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="city" class="text-left">เมือง</label>
                        <div>
                            <input type="text" class="form-control shadow-none" id="city" placeholder="กาฬสินธุ์" name="city">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="country" class="text-left">ประเทศ</label>
                        <div>
                            <input type="text" class="form-control shadow-none" id="country" placeholder="ไทย" name="country">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="postalcode" class="text-left">รหัสไปรษณีย์</label>
                        <div>
                            <input type="text" class="form-control shadow-none" id="postalcode" placeholder="46000" name="postalcode">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="phone" class="text-left">เบอร์โทรศัพท์</label>
                        <div>
                            <input type="text" class="form-control shadow-none" id="phone" placeholder="+55 (12) 3923-5555" name="phone">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="fax" class="text-left">แฟกซ์</label>
                        <div>
                            <input type="text" class="form-control shadow-none" id="fax" placeholder="+55 (12) 3923-5566" name="fax">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email" class="text-left">อีเมล <span style="color: red;">*</span></label>
                        <div>
                            <input type="text" class="form-control shadow-none" id="email" placeholder="yongyud@beamer.com"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">กรุณาระบุอีเมลของคุณ</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="username" class="text-left">ชื่อเข้าใช้งาน <span style="color: red;">*</span></label>
                        <div>
                            <input type="text" class="form-control shadow-none" id="username" placeholder="ัyongyud876"
                                pattern="[A-Za-z]{5-50}" title="[A-Za-z]" name="username" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">กรุณาระบุชื่อเข้าใช้งานของคุณ</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="password" class="text-left">รหัสผ่าน (รหัสผ่านอย่างน้อย 8 ตัว) <span style="color: red;">*</span></label>
                        <div>
                            <input type="password" class="form-control shadow-none" id="password" placeholder="@%$GDK#*J&^^%D"
                                pattern=".{8,}" title="Eight or more characters" name="password" required>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback">กรุณาระบุรหัสผ่านของคุณ</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div class="form-group">
                        <button class="btn btn-outline-success" type="submit"
                            style="margin-top: 2em; width: 100%;"><b>สมัครเข้าใช้งาน</b></button>
                    </div>
                </div>
            </div>
        </form>
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

    <nav class="navbar-light bg-white fixed-bottom navbar-expand-lg nv-test" style="margin-top: 90px;">
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