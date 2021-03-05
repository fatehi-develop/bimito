<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>Academy-Bime</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/1.png" type="image/png"/>
    <link rel="stylesheet" href="respansive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">

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
<h1 class="callus">ارتباط با ما</h1>
<?php if (isset($_GET['ok'])){
    alert('ثبت با موفقیت انجام شد','success');
} ?>
<main class="mainproduct">
    <form action="addproduct-p.php" method="post">
      				<h3 class="titrproduct">مشخصات دوره بیمه ای</h3>
					<label for = "name">نام بیمه</label>
				<section class = "input-group">
					<input type = "text" name = "name" id = "name" class="form-control" required>
				</section>
				
				<label for = "price">قیمت</label>
				<span class = "input-group">
					<input type = "number" name = "price" id = "price" class="form-control" min = "0" step = "1000" required>
					<span class = "input-group-text">تومان</span>
				</span><br>
				<label for = "description">توضیحات در مورد بیمه </label>
				<textarea name = "description" id = "description" class="form-control"></textarea><br>
				
				<label for = "file">تصویری  برای بیمه</label>
				<input type = "file" name = "productPicture" id = "file" class="form-control"><br>
				
				<h3 class="titrproduct">زمان برگزاری</h3>
				<label for = "weekday">روز هفته</label>
				<select name = "weekday" id = "weekday" class="form-control">
					<option value = "saturday">شنبه</option>
					<option value = "sunday">یک‌شنبه</option>
					<option value = "monday">دوشنبه</option>
					<option value = "tuesday">سه‌شنبه</option>
					<option value = "wednesday">چهارشنبه</option>
					<option value = "thursday">پنج‌شنبه</option>
					<option value = "friday">جمعه</option>
				</select>
				<br>
				<label for = "timeFrom">زمان شروع کلاس </label>
				<input type = "time" name = "timeFrom" id = "timeFrom" value = "00:00" class="form-control"><br>
				<label for = "timeTo">زمان پایان کلاس </label>
				<input type = "time" name = "timeTo" id = "timeTo" value = "00:00" class="form-control">
				<br>
				
				<input type = "submit" name = "submit" value = "ارسال" class="btn btn-primary">
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
