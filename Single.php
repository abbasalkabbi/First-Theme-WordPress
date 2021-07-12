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
            <!-----
            if can writer comment on post 
            add span comment
            add icon comment to span
            add  comments_popup_link
            --->
            <?php if(comments_open())
            {
            ?>
            <span class="comment">
                <img src="<?php echo get_template_directory_uri() .'/icon/comment.png' ?>" alt="">
                <?php comments_popup_link( '0 Comment','1 Comment','% Comments','comment-uri', )?>


            </span>
            <?php 
            }
            ?>
            <!--END if can writer comment on post  -->

        </footer>
        <!----END --footer--->
    </div>
    <!---End post--->
    <?php
        }//end while
        }//end if
        ?>
    <!---loop post end --->

    <?php comments_template();?>
    <!----next-prev--->
    <div class="next-prev">
        <span class="prev"><?php previous_post_link()?></span>

        <span class="next"> <?php next_post_link()?></span>

    </div>
    <!----next-prev END--->
</div>
<?php get_footer();?>