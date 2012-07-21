<html>
    <head></head>   
    <body>
        <h1>Welcome to BMVC demo site</h1>
        
        <div id="main_menu" >
            <a href="<?php echo bmvc_helper::getUrl('index', 'welcome') ?>">Home</a>
            <a href="<?php echo  bmvc_helper::getUrl('article','index'); ?>">Articles</a>
            <a href="<?php echo  bmvc_helper::getUrl('article','post'); ?>">Post New</a>
        </div>
        <div id="page_title">
            <hr>
            <h2><?php echo $this->data['page_title']; ?></h2>
        </div>
        <div>
        <p>
            <?php echo $this->data['content']; ?>
        </p>
        </div>
        <hr>
        <div>Fooooooter!</div>
        
    </body>



</html>