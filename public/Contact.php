<?php
include '../includes/function.php';
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>Academy-Bime</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/1.png" type="image/png"/>
    <link rel="stylesheet" href="assets/css/respansive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
<!--            <li class=""><a href="articel.html">مقالات</a>-->
<!--                <ul>-->
<!--                    <li><a href="articel.html">بیمه های عمر</a></li>-->
<!--                    <li><a href="">بیمه های مسئولیت</a>-->
<!--                        <ul>-->
<!--                            <li><a href="">بیمه مسئولیت کارفرما</a></li>-->
<!--                            <li><a href="">بیمه مسئولیت مهندسین ناظر</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li><a href=""> بیمه شخص ثالث </a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li><a href="">آموزش فروش </a></li>-->
<!--            <li><a href="">پادکست ها </a></li>-->
<!--            <li><a href="AboutUs.html">درباره ما</a></li>-->
<!--            <li><a href="#">ارتباط با ما </a></li>-->
        </ul>
    </div>
    <ul id="mainmenu">
        <li class=""><a href="index.html">صفحه اصلی</a></li>
<!--        <li class=""><a href="articel.html">مقالات</a>-->
<!--            <ul>-->
<!--                <li><a href="articel.html">بیمه های عمر</a></li>-->
<!--                <li><a href="">بیمه های مسئولیت</a>-->
<!--                    <ul>-->
<!--                        <li><a href="">بیمه مسئولیت کارفرما</a></li>-->
<!--                        <li><a href="">بیمه مسئولیت مهندسین ناظر</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href=""> بیمه شخص ثالث </a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li><a href="">آموزش فروش </a></li>-->
<!--        <li><a href="">پادکست ها </a></li>-->
<!--        <li><a href="AboutUs.html">درباره ما</a></li>-->
<!--        <li><a href="ContactUs.html">ارتباط با ما </a></li>-->
    </ul>
</nav>
<h1 class="callus">ارتباط با ما</h1>
<?php if (isset($_GET['ok'])){
    alertTemplate('ثبت با موفقیت انجام شد','success');
} ?>
<main class="maincall">
    <form action="contactus.php" method="post">
        <label for="name">نام و نام خانوادگی</label>
        <input type="text" name="frm[name]" id="name" placeholder=" برای مثال علی   ">

        <label for="number">تلفن </label>
        <input type="number" name="frm[tel]" id="number" placeholder=" برای مثال : 09136849865  ">

        <label for="email">ایمیل</label>
        <input type="email" name="frm[email]" id="email" placeholder="  ایمیل : fatehiali7466@gmail.com ">

        <label for="comment">نظر شما </label>
        <textarea id="comment" name="frm[comment]" rows="8" cols="80"></textarea>
        <button name="submit">ارسال</button>
    </form>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
