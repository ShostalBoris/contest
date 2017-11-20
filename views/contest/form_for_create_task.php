<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>

    <section>
		<div class="container">
			<div class="row">
				<?php if ($result):  ?>
                                    
					<p>Регистрация прошла успешно</p>
					<div class="col-sm-3"> <a href="/cabinet" class="btn btn-info btn-block"> В кабинет</a> </div>
					<?php else: ?>
					            
					<div class="signup-form">
						<h2><center>Новая задача</center></h2>
						<form action="" method="post">
						
							<div class="well">	
						<input type="text" name="short_text" placeholder="short_text" value="<?php echo $short_text; ?>"/></div>
					<div class="well">	
                    <input type="text" name="full_text" placeholder="full_text" value="<?php echo $full_text; ?>"/></div>
                    <div class="well">
                    <input type="text" name="answer" placeholder="answer" value="<?php echo $answer; ?>"/></div>
					<div class="well">	
                    <input type="submit" name="submit" class="btn btn-success" value="Создать" /></div>
							
						</form>
					</div>					
				<?php endif; ?>
			</div>
        </div>
	</section>
	
</body>

</html>






