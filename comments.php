<style>
    .comments {
    border:1px #ccc solid;
    padding:10px;
    margin-bottom:20px;
    margin-top:10px;
    list-style:none;
}

.comments h3,.comments h2 {
    background:#33b5e5;
    color:#FFF;
    padding:5px;
}

.comment-body {

    border:#ccc solid 1px;
    margin-bottom:10px;
    padding:20px 10px;

}

.comment-meta{
    background:#f0f1f3;
    color:#000;
    padding:10px;
    overflow:auto;
}

.comment-meta a {
    color:#000;
}

.comment-meta img{
    float:left;
    margin-right:10px;
}

.comment-reply-link{
    background:#33b5e5;
    color:#fff;
    display:inline-block;
    padding:10px 15px;
}

.comment-form input, .comment-form textarea{
    width:100%;
    padding:4px;
    border:#ccc solid 1px;
    margin-bottom:15px;
}
</style>
<div class="comments">
    <h2>Comments</h2>


    <?php $args = array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => 'ul',
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'reply_text'        => 'Reply',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 80,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
        'short_ping'        => false,   // @since 3.6
            'echo'              => true     // boolean, default is true
    ); ?>


<?php
wp_list_comments($args, $comments);

$comments_args = array(
        // change the title of send button 
        'label_submit'=>'Send',
        // change the title of the reply section
        'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);

comment_form($comments_args);
?>
</div>