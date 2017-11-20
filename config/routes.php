<?php

return array(
	
    // Пользователь
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    
    //Профиль пользователя
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    
    // Страница конкурса
    'contest/view/([0-9]+)' => 'contest/view/$1',
    'contest/createTask' => 'contest/createTask',
    'contest/createContest' => 'contest/createContest',
    'contest/listTask' => 'contest/listTask',
    'contest' => 'contest/index',
    
    'architect' => 'site/indexArchitect',
    
   
    
    // Главная страница   
    'admin' => 'site/indexAdmin',
    
    'player' => 'site/indexPlayer',
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
    
);