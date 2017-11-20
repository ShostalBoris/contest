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
					<?php if (isset($errors) && is_array($errors)): ?>
						<ul>
							<?php foreach ($errors as $error): ?>
								<li> - <?php echo $error; ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>               
					<div class="signup-form">
						<h2><center>Регистрация</center></h2>
						<form action="" method="post">
						
							<div class="well">	
							<input type="text" name="login" placeholder="Логин" value="<?php echo $login; ?>"/></div>	
							
							<div class="well">	
							<input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/></div>
							
							<div class="well">	
							<input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/></div>	
							
							<div class="well">	
							<input type="text" name="surname" placeholder="Фамилия" value="<?php echo $surname; ?>"/></div>	
							
							<div class="well">	
							<input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/></div>	
							
							<div class="well">	
							<input type="checkbox" name="checkboxRole"  /></div>	
                                                    
                                                        <div class="well">	
							<input type="submit" name="submit" class="btn btn-success" value="Регистрация" /></div>	
							</div>
							
						</form>
					</div>					
				<?php endif; ?>
			</div>
        </div>
	</section>
	
</body>
</html>



