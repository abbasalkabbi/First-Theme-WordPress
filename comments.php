<?php?>
<div class="comments">

    <?php 
    // if comment open 
    if( comments_open())
    {
    ?>
    <!---will--->
    <!---comment--->
    <!----foreach comment--->
    <?php 
    $comments = get_comments(array('post_id' => get_the_ID(),));
    foreach($comments as $comment) {?>
    <div class="comment">
        <a href=" <?php echo($comment->comment_author_url);?>"><?php echo($comment->comment_author);?></a>
        <span><?php echo($comment->comment_date);?></span>
        <p>
            <?php echo($comment->comment_content);?>
            <?php echo($comment->comment_author_url);?>
        </p>
    </div>
    <!---comment END --->
    <?php 
    }
    ?>
    <!----foreach comment- END-->

    <?php 
    }else //if not open
    {
    ?>
    <!--will--->
    <h1> comments is disblad</h1>
    <?php 
   }
   ?>
    <!----END Else--->

</div>
<div class="addcomment">
    <?php comment_form();?>
</div>