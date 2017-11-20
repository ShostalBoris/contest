<?php

class ContestController
{
     
    public function actionIndex()
    {
        $result = array();
        //$result = Contest::getTask();
        $result = Contest::getContest();
      
         // Подключаем вид
        require_once(ROOT . '/views/contest/index.php');
        return true;
    }
    
    /**
     * Новый конкурс
     */
    public function actionCreateContest()
    {
        $result = array();
        //$result = Contest::getTask();
        //$result = Contest::getContest();
      
         // Подключаем вид
        require_once(ROOT . '/views/contest/form_for_create_contest.php');
        return true;
    }
    
    
    /**
     * Новая задача для конкурса
     */
    public function actionCreateTask()
    {
        // Переменные для формы
        $short_text = false;
        $full_text = false;
        $answer = false;
        $result = false;
        
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $short_text = $_POST['short_text'];
	    $full_text = $_POST['full_text'];
            $answer = $_POST['answer'];

            // Флаг ошибок
            $errors = false;
            
            // Валидация полей
            /*if (!Contest::checkAnswer($answer)) {
                $errors[] = 'Вы не ввели ответ';
            }*/
            
            if ($errors == false) {
                // Если ошибок нет
                // Создадим вопрос
                
                // Получаем идентификатор пользователя из сессии
                $id_user = User::checkLogged();
                $result = Contest::createTask($id_user, $short_text, $full_text, $answer);
            }
        }
        
        
        // Подключаем вид
        require_once(ROOT . '/views/contest/form_for_create_task.php');
        return true;
    }
    
     /**
     * Вывести список всех задач пользователя
     */
    public function actionListTask()
    {
        
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();
        
        $result = array();
        $result = Contest::getTaskByIdUser($userId);
        
        // Подключаем вид
        require_once(ROOT . '/views/contest/list_task.php');
        return true;
                  
    }
    
      public function actionView($id_contest)
	{
          
	$result = array();
        $result = Contest::getTaskByIdContest($id_contest);
		   
		require_once(ROOT . '/views/contest/view.php');
		return true;
	}
    
    
    public function actionViewContest()
    {
        $answer = false;
        echo 'ggg';
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $answer = $_POST['answer'];

            // Флаг ошибок
            $errors = false;

            // Проверяем существует ли пользователь
            $userId = Contest::checkData($answer);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                print_r($userId);
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                //User::auth($userId);
                print_r($userId);
                // Перенаправляем пользователя в закрытую часть - кабинет 
                //header("Location: /");
            }
        }

        
        // Подключаем вид
        require_once(ROOT . '/views/contest/index.php');
        return true;
    }
}

