<div class="comments-container">
    <?php 
wp_list_comments(array(
    'style' => 'ul'
))
?>
</div>
<div class="addcomment">
    <?php comment_form();?>
</div>