<div id="post_article">
    <h3>Post a New Article:</h3>
    <form id="post_article_form" name="post_article_form" action="<?php echo bmvc_helper::getUrl('article', 'post'); ?>" method="POST">
        <div>
        Title:
        <input type="text" id="article_title" name="article_title" />
        </div>
        <div>
        Content:<br/>
        <textarea  id="article_content" name="article_content" rows="5" cols="40" /></textarea>
        </div>
        <div>
        Your Name:
        <input type="text" id="article_user_name" name="article_user_name" />
        </div>
        <div>
            <input type="submit" value="Post" />
        </div>    
    </form>
</div>
