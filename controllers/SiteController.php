<?php

/**
 * Контроллер CartController
 */
class SiteController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }
    
    public function actionIndexAdmin()
    { 
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        
        // Подключаем вид
        require_once(ROOT . '/views/site/index_for_admin.php');
        return true;
    }
    
    public function actionIndexArchitect()
    {  
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        
        // Подключаем вид
        require_once(ROOT . '/views/site/index_for_architect.php');
        return true;
    }
    
    public function actionIndexPlayer()
    {  
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        
        // Подключаем вид
        require_once(ROOT . '/views/site/index_for_player.php');
        return true;
    }
    
}