<?php get_header();?>
<div class="container">
    <div class="page-error">
        <?php 
        global $wp;?>

        <h1>This Link <br> <span>(<?php echo home_url( $wp->request );?>)</span> <br>
            is Error</h1>
    </div>
</div>
<?php get_footer();?>