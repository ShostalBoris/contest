<!DOCTYPE html">
<html>
    <head>
        <meta charset=utf-8">
        <title></title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="template/css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="template/js/my_scripts.js"></script>
    </head>
    <body>
        
    <?php foreach ($result as $taskList): ?>
        <div class="well">
                <p> <?php echo $taskList['short_text']; ?> </p>
            <p><?php echo $taskList['full_text']; ?></p>
	 <p> <?php echo $taskList['answer']; ?></p>
        </div>
    <?php endforeach; ?>
        
        
</body>
</html>

