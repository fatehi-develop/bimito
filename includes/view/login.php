<?php get_header();?>
<h1 class="callus">ارتباط با ما</h1>
<?php 
if( isset($alerts) )
echo $alerts;
?>
<main class="mainproduct">
    <form action="" method="post">

        <label for = "user-name">نام کاربری</label>
        <section class = "input-group">
            <input type ="email" name="email" id = "user-name" class="form-control" required>
        </section>

        <label for = "password">پسورد </label>
        <section class = "input-group">
            <input type = "password" name="password" id = "password" class="form-control" required>
        </section>

        <input type = "submit" name ="submit" value = "ارسال" class="btn btn-primary">
    </form>
</main>
<?php get_footer();?>