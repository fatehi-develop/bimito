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
<header id="top" >
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
            <li ><a href="">آموزش فروش </a></li>
            <li ><a href="">پادکست ها </a></li>
            <li ><a href="AboutUs.html">درباره ما</a></li>
            <li ><a href="#">ارتباط با ما </a></li>
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
        <li ><a href="">آموزش فروش </a></li>
        <li ><a href="">پادکست ها </a></li>
        <li ><a href="AboutUs.html">درباره ما</a></li>
        <li><a href="ContactUs.html">ارتباط با ما </a></li>
    </ul>
</nav>
<h1 class="callus">لیست محصولات</h1>
<main class="mainarticel">
    <div class="container">
        <div class="row">
    <?php foreach ($table as $row):?>
        <div class="col-sm-4">
    <section class="sectionarticel ">
        <h1><?php echo $row['name'];?></h1>
        <div class="imgarticel">
            <a href="articelsingle.html">
                <img src="assets/img/Article216-min.jpg" alt="">
                <a class="imgabout" href="">   </a>
            </a>
        </div>

        <a href="articelsingle.html"> <p><?php echo $row['description'];?></p></a>
        <span class="price">قیمت  : <?php echo number_format($row['price']);?> تومان</span>
        <a class="maxmax-red" href="">حذف</a>
        <a class="maxmax-edit" href="">ویرایش</a>
    </section>
    </div>
    <?php endforeach;?>
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
