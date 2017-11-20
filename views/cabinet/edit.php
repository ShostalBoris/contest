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

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Данные отредактированы!</p>
					<a href="/cabinet"> В кабинет</a>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Редактирование данных</h2>
                        <form action="#" method="post">
			<div class="well">
                            <p>Логин:</p>
                            <input type="text" name="login" placeholder="Логин" value="<?php echo $login; ?>"/>   </div>   
						<div class="well">							
                            <p>Пароль:</p>
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/></div>
                         <div class="well"> 
							<p>Имя:</p>
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/></div>
                            <div class="well"> 
							<p>Фамилия:</p>
                            <input type="text" name="surname" placeholder="Фамилия" value="<?php echo $surname; ?>"/></div>
                     
                         <div class="well">  
                            <input type="submit" name="submit" class="btn btn-default" value="Сохранить" /> </div>
                        </form>
                    </div><!--/sign up form-->
                
                <?php endif; ?>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

	 
	
</body>
</html>

