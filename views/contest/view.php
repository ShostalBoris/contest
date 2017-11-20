<!DOCTYPE html>
<html>
    <head>
    <meta charset=utf-8">
    <title></title>
    
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/template/js/popup_javascript.js"></script>
    <link rel="stylesheet" type="text/css" href="/template/css/popup_style.css" />
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    
    </head>
    <body>
	     
        <?php foreach ($result as $taskItem): ?>    
            <a class="popup-link-<?php echo $taskItem['id_task']; ?>" href="">
                <?php echo $taskItem['short_text']; ?>
            </a>  
            <div class="popup-box" id="popup-box-<?php echo $taskItem['id_task']; ?>">
                <div class="close">X</div>
                <div class="top">
                    <h2><?php echo $taskItem['short_text']; ?></h2>
                </div>
                <div class="bottom">
                    <?php echo $taskItem['full_text']; ?>
                </div>                   
            </div><br>
        <?php endforeach; ?>
        
    </body>
</html>

