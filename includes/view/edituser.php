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
    alert('ثبت با موفقیت انجام شد','success');
} ?>
<main class="mainproduct">
    <form action="" method="post">
        <label for = "name">نام و نام خانوادگی</label>
        <section class = "input-group">
            <input type = "text" name = "name" id = "name" class="form-control" value="<?php if( isset($row['name']) ) echo $row['name']; ?>" required>
        </section>
        <label for = "name"> تاریخ تولد</label>
        <section class = "input-group">
            <input type = "date"  name = "date" id = "name" class="form-control" value="<?php if( isset($row['date']) ) echo $row['date']; ?>" required>
        </section>
        <label for = "user-name">نام کاربری</label>
        <section class = "input-group">
            <input type = "text" name = "username" id = "user-name" class="form-control" value="<?php if( isset($row['username']) ) echo $row['username']; ?>" required>
        </section>
        <label for = "user-name">ایمیل</label>
        <section class = "input-group">
            <input type = "email" name = "email" id = "user-name" class="form-control"  value="<?php if( isset($row['username']) ) echo $row['username']; ?>" required>
        </section>
        <label for = "user-name">جنسیت</label>
        <div class="input-group">
            <select name="gender" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option value="mail" selected>مرد</option>
                <option value="femail">زن</option>
                <option value="other">دیگر</option>
            </select>
        </div>
        <label for = "user-name">محل سکونت</label>
        <div class="input-group">
            <select name="ostan" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option selected value="<?php if( isset($row['ostan']) ) echo $row['ostan']; ?>"> <?php if( isset($row['ostan']) ) echo $row['ostan']; ?> </option>
                <option value="تهران">تهران</option>
                <option value="گیلان">گیلان</option>
                <option value="آذربایجان شرقی">آذربایجان شرقی</option>
                <option value="خوزستان">خوزستان</option>
                <option value="فارس">فارس</option>
                <option value="اصفهان">اصفهان</option>
                <option value="خراسان رضوی">خراسان رضوی</option>
                <option value="قزوین">قزوین</option>
                <option value="سمنان">سمنان</option>
                <option value="قم">قم</option>
                <option value="مرکزی">مرکزی</option>
                <option value="زنجان">زنجان</option>
                <option value="مازندران">مازندران</option>
                <option value="گلستان">گلستان</option>
                <option value="اردبیل">اردبیل</option>
                <option value="آذربایجان غربی">آذربایجان غربی</option>
                <option value="همدان">همدان</option>
                <option value="کردستان">کردستان</option>
                <option value="کرمانشاه">کرمانشاه</option>
                <option value="لرستان">لرستان</option>
                <option value="بوشهر">بوشهر</option>
                <option value="کرمان">کرمان</option>
                <option value="هرمزگان">هرمزگان</option>
                <option value="چهارمحال و بختیاری">چهارمحال و بختیاری</option>
                <option value="یزد">یزد</option>
                <option value="سیستان و بلوچستا">سیستان و بلوچستان</option>
                <option value="ایلام">ایلام</option>
                <option value="کهگلویه و بویراحمد">کهگلویه و بویراحمد</option>
                <option value="خراسان شمالی">خراسان شمالی</option>
                <option value="خراسان جنوبی">خراسان جنوبی</option>
                <option value="البرز">البرز</option>
            </select>
        </div>
        <label for = "adress">آدرس </label>
        <section class = "input-group">
            <input type = "text" name = "adress" id = "adress" class="form-control" value="<?php if( isset($row['adress']) ) echo $row['adress']; ?>" required>
        </section>
        <label for = "password">پسورد </label>
        <section class = "input-group">
            <input type = "password" name = "password" id = "password" class="form-control" value="<?php if( isset($row['ostan']) ) echo $row['ostan']; ?>" required>
        </section>
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
