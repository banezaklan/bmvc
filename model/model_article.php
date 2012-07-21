<?php
/**
 * @author Bane Zaklan, bzaklan@gmail.com
 * @since Jul 16, 2012
 *
 * Decription:
 * 
 */
class model_article extends model_base{
    
    
    public function post($title,$content,$user_name){
        $sql = "insert into article set title='".$title."', content='".$content."', user_name='".$user_name."'";
        $this->getOne($sql);
    }
    
    public function getSingle($id){
        $sql = "select * from article where id=".$id;
        $result = $this->getOne($sql);
        return $result;
    }
    
    public function getAll(){
        $sql = "select * from article order by id desc";
        $result = $this->query($sql);
        return $result;        
    }
    
    
    
    
}

?>
