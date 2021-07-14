<?php get_header();?>

<div class="container">

    <!----author---->
    <div class="author">

        <!----image-->
        <div class="image">
            <?php echo get_avatar(get_the_author_meta('ID'),250)?>
        </div>
        <!----image END-->


        <!----name-->
        <div class="name">
            <ul>
                <li>First Name: <?php echo get_the_author_firstname();?></li>
                <li>Last Name: <?php echo get_the_author_lastname();?></li>
                <li>Nick Name: <?php echo get_the_author_nickname();?></li>

                <li>capability : <?php 
                $capability =get_the_author_meta('wp_capabilities');
                foreach($capability as $key => $v){
                    echo $key;
                }
                ?></li>
                <li>Email: <?php echo get_the_author_email();?></li>
                <!---
                if check description is not empty
                echo description
                --->

            </ul>
            <?php if(get_the_author_description() != ''){  ?>
            <p>Description: <?php echo get_the_author_description();?></p>
            <?php } ?>

        </div>
        <!----name END-->

    </div>
    <!----author END---->
    <!----info---->
    <div class="info">
        <!----has --->
        <div class="has ">
            <h2>COUNT COMMENT</h2>
            <p><?php 
            $comments_count=array(
                'user_id' => get_the_author_meta('ID'),
                'count' => true,
                
            ); 
            echo get_comments($comments_count);
          
            ?>
            </p>
        </div>
        <!----has         END--->
        <!----has --->
        <div class="has ">
            <h2>POST COUNT</h2>
            <p><?php echo count_user_posts(get_the_author_meta('ID'));?></p>
        </div>
        <!----has  END--->


    </div>
    <!----info END---->
    <!---loop post--->
    <?php 
    if(have_posts()){
        while(have_posts()){
            the_post();?>
    <!---post_author---->
    <div class="post_author">
        <!----header-->
        <header>

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
                <?php the_post_thumbnail('thumbnail');?>
            </div>

            <?php
              }
            ?>
            <!---end if post has_post_thumbnail-->
            <!---print content post--->
            <div class="content">
                <?php the_excerpt(); ?>
                <!---readmore--->
                <div class="readmore">
                    <a href="<?php the_permalink()?>" title="<?php the_title();?>">
                        Read More
                    </a>
                </div>
                <!---readmore END--->
            </div>

            <!---END print content post--->


        </section>
        <!----END section-->
        <!------footer--->
        <footer>

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

        </footer>
        <!----END --footer--->
    </div>
    <!---post_author---->
    <?php
        }//end while
        }//end if
        ?>
    <!---loop post end --->
    <!----next-prev--->
    <?php if( get_previous_posts_link() ) {?>
    <span class="prev"><?php previous_posts_link()?></span>
    <?php } ?>
    <?php if( get_next_posts_link() ) {?>
    <span class="next"> <?php next_posts_link()?></span>
    <?php } ?>
    <!----next-prev END--->
</div>
<?php get_footer();?>