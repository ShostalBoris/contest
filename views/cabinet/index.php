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
				
                                    
					         
					<div class="signup-form">
						<h2><center>Профиль</center></h2>
						<form action="/cabinet/edit" method="post">
						
							<div class="well">	
							<?php echo $user['login']; ?></div>	
							
							<div class="well">	
							<?php echo $user['password']; ?></div>
							
							<div class="well">	
							<?php echo $user['name']; ?></div>	
							
							<div class="well">	
							<?php echo $user['surname']; ?></div>	
							
							<div class="well">	
							<?php echo $user['email']; ?></div>	
							
							
                                                    
                                                        <div class="well">	
							<a href="/cabinet/edit">Редактировать</a>	
							</div>
							
						</form>
					</div>					
				
			</div>
        </div>
	</section>
	
</body>
</html>



