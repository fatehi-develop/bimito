<?php get_header();?>
<h1 class="callus">لیست محصولات</h1>
<main class="mainarticel">
    <div class="container">
        <div class="row">
    <?php foreach ($table as $row){
        get_template_part('catalog',null,$row);
    }?>
   

        </div>
    </div>
</main>
<?php get_footer();?>
