<div class="col-sm-4">
<a href="productDetails.php?id=<?php echo $id ?>">
    <section class="sectionarticel ">
        <h1><?php echo $name;?></h1>
        <div class="imgarticel"> 
            <a href="articelsingle.html">
                <img src="assets/img/Article216-min.jpg" alt="">
                <a class="imgabout" href="">   </a>
            </a>
        </div>

        <a href="productDetails.php?id=<?php echo $id ?>"> <p><?php echo $description;?></p></a>
        <span class="price">قیمت  : <?php echo number_format($price);?> تومان</span>
        <a class="maxmax-red" >حذف</a>
        <a class="maxmax-edit" >ویرایش</a>
    </section>
    </a>
    </div>