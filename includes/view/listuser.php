<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>Academy-Bime</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/1.png" type="image/png"/>
    <link rel="stylesheet" href="assets/css/respansive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>
<header id="top">
    <img src="img/2.png" alt="">
    <h1>آکـادمی بیــــمه</h1>
    <h2>آموزش فــــــروش و بازایــابی بیمه</h2>
</header>
<nav>
    <div id="mobail">
        منـــــو
        <ul>
            <li class=""><a href="index.html">صفحه اصلی</a></li>
            <li class=""><a href="articel.html">مقالات</a>
                <ul>
                    <li><a href="articel.html">بیمه های عمر</a></li>
                    <li><a href="">بیمه های مسئولیت</a>
                        <ul>
                            <li><a href="">بیمه مسئولیت کارفرما</a></li>
                            <li><a href="">بیمه مسئولیت مهندسین ناظر</a></li>
                        </ul>
                    </li>
                    <li><a href=""> بیمه شخص ثالث </a></li>
                </ul>
            </li>
            <li><a href="">آموزش فروش </a></li>
            <li><a href="">پادکست ها </a></li>
            <li><a href="AboutUs.html">درباره ما</a></li>
            <li><a href="#">ارتباط با ما </a></li>
        </ul>
    </div>
    <ul id="mainmenu">
        <li class=""><a href="index.html">صفحه اصلی</a></li>
        <li class=""><a href="articel.html">مقالات</a>
            <ul>
                <li><a href="articel.html">بیمه های عمر</a></li>
                <li><a href="">بیمه های مسئولیت</a>
                    <ul>
                        <li><a href="">بیمه مسئولیت کارفرما</a></li>
                        <li><a href="">بیمه مسئولیت مهندسین ناظر</a></li>
                    </ul>
                </li>
                <li><a href=""> بیمه شخص ثالث </a></li>
            </ul>
        </li>
        <li><a href="">آموزش فروش </a></li>
        <li><a href="">پادکست ها </a></li>
        <li><a href="AboutUs.html">درباره ما</a></li>
        <li><a href="ContactUs.html">ارتباط با ما </a></li>
    </ul>
</nav>
<h1 class="callus">لیست کاربران</h1>
<main class="mainarticel">
    <div>
        <div class="row">
            <ul class="listuser">
                <li>
                    <div class="row">
                        <div class="col-sm-1 col-md-2">
                            <span style="padding:0 20px;">نام</span>
                        </div>
                        <div class="col-sm-1 col-md-2">
                            <span style="padding:0 20px">استان</span>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <span style="padding:0 20px;">ادرس</span>
                        </div>
                        <div class="col-sm-3 col-md-2">
                            <span style="padding:0 20px">تاریخ تولد</span>
                        </div>
                        <div class="col-sm-1 col-md-2">
                            <span style="padding:0 20px">جنسیت</span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul>
                <?php foreach ($table as $row): ?>
                    <li>
                        <div class="row">
                            <div class="col-sm-1 col-md-2">
                                <span style="padding:0 20px"><?php echo $row['name']; ?></span>
                            </div>
                            <div class="col-sm-1 col-md-2">
                                <span style="padding:0 20px"><?php echo $row['ostan']; ?></span>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <span style="padding:0 20px"><?php echo $row['adress']; ?></span>
                            </div>
                            <div class="col-sm-3 col-md-2">
                                <span style="padding:0 20px"><?php echo $row['date']; ?></span>
                            </div>
                            <div class="col-sm-1 col-md-2">
                                <span style="padding:0 20px"><?php
                                    if ($row['gender'] == 'mail') {
                                        echo 'مرد';
                                    } else
                                        echo 'زن'
                                    ?></span>
                            </div>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</main>
<span class="footer"> کلیه حقوق برای <strong> بیمه</strong> محفوظ می باشد </span>
<!--      <ul class="social">-->
<!--        <li> <img class="telegram" src="img/telegram.png" alt=""></li>-->
<!--        <li><img class="youtube" src="img/youtube.png" alt=""></li>-->
<!--        <li><img class="whatsapp" src="img/whatsapp.png" alt=""></li>-->
<!--    </ul>-->
<p id="gotop">
    <a href="#top"><img class="top" src="img/5.png" alt=""></a>
</p>
</body>
</html>
