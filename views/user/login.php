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
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                         <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div class="signup-form">
                <h2><center>Вход</center></h2>
                <form action="/user/login" method="post">
					<div class="well">	
						<input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/></div>
					<div class="well">	
                    <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/></div>
					<div class="well">	
                    <input type="submit" name="submit" class="btn btn-success" value="Вход" /></div>
                </form>
            </div>
        </div>
    </div>
	</section>
	
</body>
</html>
