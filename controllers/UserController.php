<?php

/**
 * Контроллер UserController
 */

// Выполняет проверку checkbox
function checkbox_verify($checkboxName)
{
	$checkboxResult = 'player';
	// Проверяем, есть ли вообще такой checkbox на HTML форме
	if (isset($_REQUEST[$checkboxName])) { 
		if ($_REQUEST[$checkboxName] == 'on') {
			$checkboxResult = 'architect';
		}
	}
	return $checkboxResult;
}
 
 
class UserController
{
    /**
     * Action для страницы "Регистрация"
     */
    public function actionRegister()
    {
        // Переменные для формы
	$login = false;
        $password = false;
	$name = false;
	$surname = false;
	$email = false;
	$role = false;
        $result = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $login = $_POST['login'];
	    $password = $_POST['password'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $role = checkbox_verify('checkboxRole');

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkLogin($login)) {
                $errors[] = 'Логин не должен быть короче 2-х символов';
            }
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }
            if (User::checkLoginExists($login)) {
                $errors[] = 'Такой логин уже используется';
            }
            
            if ($errors == false) {
                // Если ошибок нет
                // Регистрируем пользователя
                $result = User::register($login, $password, $name, $surname, $email, $role);
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/user/register.php');
        return true;
    }
    
    /**
     * Action для страницы "Вход на сайт"
     */
    public function actionLogin()
    {
        // Переменные для формы
        $email = false;
        $password = false;
        
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);
            // Запишем роль пользователя
            $userRole = User::checkUserRoleData($email, $password);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя и его роль (сессия)
                User::authUser($userId);
                User::authRole($userRole);
               
                // Перенаправляем пользователя на главную страницу 
                header("Location: /");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    /**
     * Удаляем данные о пользователе из сессии
     */
    public function actionLogout()
    {
        
        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["user"]);
        unset($_SESSION["role"]);
        
        // Перенаправляем пользователя на главную страницу
        header("Location: /");
    }

}
