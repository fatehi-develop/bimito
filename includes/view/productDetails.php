<?php get_header();?>
<h1 class="callus">جزییات محصول</h1>
<main class="mainarticel">
    <div class="container">
        <div class="row">
    <?php foreach ($table as $row){
        get_template_part('productDetails',null,$row);
    }?>
        </div>
    </div>
</main>
<?php get_footer();?>
