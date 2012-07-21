<div id="article">
    <hr>
    <h3><a href="<?php echo bmvc_helper::getUrl('article','single',array($this->data['article']['id']) ); ?>"><?php echo $this->data['article']['title'];?></a></h3>
    <i>Article by <?php echo $this->data['article']['user_name'];?></i>
    <p><?php echo $this->data['article']['content'];?></p>
    
</div>
  
<?php if(isset($this->data['article']['comments'])){ ?>
<div id="article_comments" style="padding-top: 15px;">
    Comments:<br>
    <?php foreach ($this->data['article']['comments'] as $comment) { 
        echo $comment['user_name']." says: <i>".$comment['comment_text']."</i><br>";
    } ?>
</div>
<?php } ?>

<?php if(isset($this->data['comment_form'])){ ?>
<div id="post_comment" style="padding-top: 25px;">
    <form id="post_comment_form" name="post_comment_form" action="<?php echo bmvc_helper::getUrl('article', 'comment', array($this->data['article']['id'])); ?>" method="POST" >
        <input type="text" name="user_name" id="user_name" value="Your user name?" /><br>
        <textarea id="comment_text" name="comment_text" cols="40" rows="5">Your Comment...</textarea><br>
        <input type="hidden" id="article_id" name="article_id" value="<?php echo $this->data['article']['id']; ?>" />
        <input type="submit" value="Post Comment"/>
    </form>
</div>    
<?php } ?>
