
<div id="articles">
    <?php foreach ($this->data['articles'] as $article) { 
        $view = new view_base('view_article', array(    'article'=>$article
                                                    ));
        echo $view->render();

    } ?>
</div>