<?php get_header();?>
<!---container--->

<div class="container">

    <!---loop post--->
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post();?>
    <!---post--->
    <div class="posts">
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
            <!---
                if post has_post_thumbnail 
                add div class="thumbnail"
                and add img
                  -->
            <?php  
            if(has_post_thumbnail())
            {
                ?>
            <div class="thumbnail">
                <?php the_post_thumbnail();?>
            </div>

            <?php
              }
            ?>
            <!---end if post has_post_thumbnail-->
            <!---print content post--->
            <?php the_excerpt(); ?>
            <!---END print content post--->
            <!---readmore--->
            <div class="readmore">
                <a href="<?php the_permalink()?>" title="<?php the_title();?>">
                    Read More
                </a>
            </div>
            <!---readmore END--->

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
    <?php
        }//end while
        }//end if
        ?>
    <!---loop post end --->
    <div class="re"></div>
    <!----next-prev--->
    <?php if( get_previous_posts_link() ) {?>
    <span class="prev"><?php previous_posts_link()?></span>
    <?php } ?>
    <?php if( get_next_posts_link() ) {?>
    <span class="next"> <?php next_posts_link()?></span>
    <?php } ?>
    <!----next-prev END--->
</div>
<!---end container--->
<?php get_footer();?>