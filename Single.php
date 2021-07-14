<!--- this is page show post --->

<?php get_header();?>
<div class="container">
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post();?>
    <!---post--->
    <div class="posts post">
        <!----header-->
        <header>
            <span class="author">
                <img src="<?php echo get_template_directory_uri() .'/icon/author.png' ?>" alt="">
                <?php the_author_posts_link(); ?>
            </span>
            <span class="date">
                <img src="<?php echo get_template_directory_uri() .'/icon/date.png' ?>" alt="">
                <?php the_time('F /j/ Y')?>

            </span>
            <a href="<?php the_permalink()?>" title="link  to <?php the_title_attribute(); ?>">
                <!---get title-->
                <?php the_title( "<h1>", "</h1>",);?>

            </a>
        </header>
        <!----End header-->
        <!----section-->
        <section>

            <!---print content post--->
            <p> <?php the_content (); ?> </p>
            <!---END print content post--->
        </section>
        <!----END section-->
        <!------footer--->
        <footer>
            <!---
            if post has_category
             add span category
             add icon category in span 
             add all category
            -->
            <?php if(has_category())
            {
            ?>
            <span class="category">
                <img src="<?php echo get_template_directory_uri() .'/icon/tags.png' ?>" alt="">
                <?php the_category(',');?>
            </span>
            <?php 
            } 
            ?>
            <!---END if post has_category--->
            <!---comment div---->
            <div class="comment">
                <!---END if post has_category--->
                <!-----
            if can writer comment on post 
            add span comment
            add icon comment to span
            add  comments_popup_link
            --->
                <?php if(comments_open())
            {
            ?>
                <span>
                    <img src="<?php echo get_template_directory_uri() .'/icon/comment.png' ?>" alt="">
                    <?php comments_popup_link( '0 Comment','1 Comment','% Comments','comment-uri', )?>


                </span>
                <?php 
            }else{
            ?>
                <!--END if can writer comment on post  -->
                <!----if cant writer comment on post--->
                <span class="comment-no">
                    <img src="<?php echo get_template_directory_uri() .'/icon/comment.png' ?>" alt="">
                    <h2>Can't comment</h2>

                </span>
                <?php 
            }
            ?>
                <!----END if cant writer comment on post--->
            </div>
            <!---comment div END---->

        </footer>
        <!----END --footer--->
    </div>
    <!---End post--->
    <!---info about author---->
    <div class="author-info">
        <div class="image">
            <?php echo get_avatar(get_the_author_meta('ID'),96)?>
        </div>

        <section>
            <a
                href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php echo get_the_author_meta('first_name').' '.get_the_author_meta('last_name') ?></a>
            <p><?php echo get_the_author_meta('description')?></p>
        </section>

    </div>
    <!---info about author END---->
    <?php
        }//end while
        }//end if
        ?>
    <!---loop post end --->

    <?php comments_template();?>
    <div class="re"></div>
    <!----next-prev--->
    <?php if( get_previous_post_link() ) {?>
    <span class="prev"><?php previous_post_link()?></span>
    <?php } ?>
    <?php if( get_next_post_link() ) {?>
    <span class="next"> <?php next_post_link()?></span>
    <?php } ?>
    <!----next-prev END--->
</div>
<?php get_footer();?>