<?php get_header();?>
<h1 class="callus">ارتباط با ما</h1>
<?php if (isset($_GET['ok'])){
    alerts('ثبت با موفقیت انجام شد','success');
} ?>
<main class="mainproduct">
    <form action="addproduct-p.php" method="post">
        <h3 class="titrproduct">مشخصات دوره بیمه ای</h3>
        <label for = "name">نام بیمه</label>
        <section class = "input-group">
            <input type = "text" name = "name" id = "name" class="form-control" value="<?php if( isset($row['name']) ) echo $row['name']; ?>" required>
        </section>

        <label for = "price">قیمت</label>
        <span class = "input-group">
					<input type = "number" name = "price" id = "price" class="form-control" min = "0" step = "1000" value="<?php if( isset($row['price']) ) echo $row['price']; ?>" required>
					<span class = "input-group-text">تومان</span>
				</span><br>
        <label for = "description">توضیحات در مورد بیمه </label>
        <textarea name = "description" id = "description" class="form-control" value="<?php if( isset($row['description']) ) echo $row['description']; ?>"></textarea><br>

        <label for = "file">تصویری  برای بیمه</label>
        <input type = "file" name = "productPicture" id = "file" class="form-control"><br>

        <h3 class="titrproduct">زمان برگزاری</h3>
        <label for = "weekday">روز هفته</label>
        <select name = "weekday" id = "weekday" class="form-control">
            <option value = "<?php  if (isset($row['weekday'])) echo $row['weekday']; ?>" selected><?php  if (isset($row['weekday'])) echo $row['weekday']; ?></option>
            <option value = "شنبه">شنبه</option>
            <option value = "یک‌شنبه">یک‌شنبه</option>
            <option value = "دوشنبه">دوشنبه</option>
            <option value = "سه‌شنبه">سه‌شنبه</option>
            <option value = "چهارشنبه">چهارشنبه</option>
            <option value = "پنج‌شنبه">پنج‌شنبه</option>
            <option value = "جمعه">جمعه</option>
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

<?php get_footer();?>
