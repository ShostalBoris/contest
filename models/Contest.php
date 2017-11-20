<?php


class Contest
{
    
    /**
     * Создаем задачу для конкурса
     */
    public static function createTask($id_user, $short_text, $full_text, $answer)
    {
        
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO task (id_user, short_text, full_text, answer) '
                . 'VALUES (:id_user, :short_text, :full_text, :answer)';
        
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id_user', $id_user, PDO::PARAM_STR);
	$result->bindParam(':short_text', $short_text, PDO::PARAM_STR);
        $result->bindParam(':full_text', $full_text, PDO::PARAM_STR);
        $result->bindParam(':answer', $answer, PDO::PARAM_STR);
        
        return $result->execute();
        
    }
    
    /**
     * Выводим список задач по указанному id_user
     */
    public static function getTaskByIdUser($id_user)
    {
        // Соединение с БД
        $db = Db::getConnection();
	$sql = 'SELECT short_text, full_text, answer FROM task WHERE id_user = :id_user';
        // Получение и возврат результатов. Используется подготовленный запрос
        
        $result = $db->prepare($sql);
        $result->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $result->execute();
        
        // Получение и возврат результатов
        $i = 0;
        $taskList = array();
		
        while ($row = $result->fetch()) { 
            $taskList[$i]['short_text'] = $row['short_text'];
            $taskList[$i]['full_text'] = $row['full_text'];
            $taskList[$i]['answer'] = $row['answer'];
            $i++;
        }

        return $taskList;
        
    }
    
    
    /**
     * Выводим список задач по указанному id_contest
     */
    public static function getTaskByIdContest($id_contest)
    {   
        // Соединение с БД
        $db = Db::getConnection();
	
        $sql = 'SELECT task.id_task, short_text, full_text, answer '
                . 'FROM task, task_in_contest '
                . 'WHERE task.id_task = task_in_contest.id_task '
                . 'AND task_in_contest.id_contest = :id_contest';
        
        // Получение и возврат результатов. Используется подготовленный запрос
        
        $result = $db->prepare($sql);
        $result->bindParam(':id_contest', $id_contest, PDO::PARAM_INT);
        $result->execute();
            
        // Получение и возврат результатов
        $i = 0;
        $taskList = array();
		
        while ($row = $result->fetch()) { 
            $taskList[$i]['id_task'] = $row['id_task'];
            $taskList[$i]['short_text'] = $row['short_text'];
            $taskList[$i]['full_text'] = $row['full_text'];
            $taskList[$i]['answer'] = $row['answer'];
            $i++;
        }
        
        return $taskList;
        
    }
    
    
    /**
     * Возвращает список конкурсов
     */
    public static function getContest()
    {
        // Соединение с БД
        $db = Db::getConnection();
		
	$result = $db->query('SELECT id_contest, name, time FROM contest');
        // Получение и возврат результатов
        $i = 0;
        $contestList = array();
		
        while ($row = $result->fetch()) { 
            $contestList[$i]['id_contest'] = $row['id_contest'];
            $contestList[$i]['name'] = $row['name'];
            $contestList[$i]['time'] = $row['time'];
            $i++;
        }
        return $contestList;
    }
    
    
  
    public static function checkData($answer)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE answer = :answer';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':answer', $answer, PDO::PARAM_INT);
        $result->execute();

        // Обращаемся к записи
        $user = $result->fetch();

        if ($user) {
            // Если запись существует, возвращаем id пользователя
            return $user['id_task'];
        }
        return false;
    }
	
}

