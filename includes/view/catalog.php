<?php get_header();?>
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
<?php get_footer();?>
