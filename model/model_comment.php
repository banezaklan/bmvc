<?php
/**
 * @author Bane Zaklan, bzaklan@gmail.com
 * @since Jul 16, 2012
 *
 * Decription:
 * 
 */

class model_comment extends model_base{
    
    public function post($id_article,$comment_text,$user_name){
        $sql = "insert into comment set id_article=".$id_article.", comment_text='".$comment_text."', user_name='".$user_name."'";
        $this->execute($sql);        
    }
    
    public function getCommentsByArticleId($article_id){
        $sql = "select * from comment where id_article=".$article_id;
        $result = $this->query($sql);
        return $result;        
    }
    
    
}

?>
