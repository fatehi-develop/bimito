<?php get_header();?>
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
<?php get_footer();?>
