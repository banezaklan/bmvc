<?php
/**
 * @author Bane Zaklan, bzaklan@gmail.com
 * @since Jul 16, 2012
 *
 * Decription:
 * 
 */

class controller_article extends controller_main_layout {
    
    private $article = null;
    
    public function __construct() {
        parent::__construct();
        $this->pageTitle = "Articles";
        $this->article = new model_article();
    }
    
    public function action_index() {
        parent::action_index();
        
        $articles = $this->article->getAll();
        
        $articlesWithComments = array();
        $modelComments = new model_comment();
        
        foreach ($articles as $key => $article) {
            $articlesWithComments[$key] = $article;
            $articlesWithComments[$key]['comments'] = $modelComments->getCommentsByArticleId($articlesWithComments[$key]['id']);
        }
        
        $this->view = new view_base('view_article_list', array('articles'=>$articlesWithComments));
        $this->render();        
        
    }
    
    public function action_single($params){
        
        $articleId = $params[0];
        
        $article = $this->article->getSingle($articleId);
        
        $modelComments = new model_comment();
        $article['comments'] = $modelComments->getCommentsByArticleId($article['id']);
        
        $commentView = new view_base('view_comment_post', array('article_id'=>$articleId));
        
        $this->view = new view_base('view_article', array('article'=>$article,'comment_form'=>$commentView->render()));
        $this->render();                
    }
    
    
    public function action_comment($params){
        $modelComment = new model_comment();
        $modelComment->post($this->request['article_id'], $this->request['comment_text'], $this->request['user_name']);
        $this->action_single($params);
    }
    
    
    public function action_post(){
        if (isset($this->request)) {
            $this->article->post($this->request['article_title'], $this->request['article_content'], $this->request['article_user_name']);
            $this->action_index();            
        }else{
            $this->view = new view_base('view_article_post', array());
            $this->render();            
        }
    }

    public function render() {
        parent::render();
    }
    
}

