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
	
        <?php foreach ($result as $contestList): ?>
            <a href="/contest/view/<?php echo $contestList['id_contest']; ?>" >                                                                                    
		<?php echo $contestList['name']; ?>
            </a>
            <?php echo $contestList['time']; ?>
	<?php endforeach; ?>
  
        
    </body>
</html>

