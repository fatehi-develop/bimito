<?php get_header();?>
<h1 class="callus">ارتباط با ما</h1>
<?php if (isset($_GET['ok'])){
    alerts('ثبت با موفقیت انجام شد','success');
} ?>
<main class="mainproduct">
    <form action="" method="post">
      				<h3 class="titrproduct">مشخصات دوره بیمه ای</h3>
					<label for = "name">نام بیمه</label>
				<section class = "input-group">
					<input type = "text" name = "name" id = "name" class="form-control" required>
				</section>
				
				<label for = "price">قیمت</label>
				<span class = "input-group">
					<input type = "number" name ="price" id = "price" class="form-control" min = "0" step = "1000" required>
					<span class = "input-group-text">تومان</span>
				</span><br>
				<label for = "description">توضیحات در مورد بیمه </label>
				<textarea name ="description" id = "description" class="form-control"></textarea><br>
				
				<label for = "file">تصویری  برای بیمه</label>
				<input type = "file" name ="productPicture" id = "file" class="form-control"><br>
				
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
				<input type = "time" name ="timeFrom" id = "timeFrom" value = "00:00" class="form-control"><br>
				<label for = "timeTo">زمان پایان کلاس </label>
				<input type = "time" name ="timeTo" id = "timeTo" value = "00:00" class="form-control">
				<br>
				
				<input type = "submit" name ="submit" value = "ارسال" class="btn btn-primary">
    </form>
</main>

<?php get_footer();?>