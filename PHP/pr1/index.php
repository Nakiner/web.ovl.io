<!DOCTYPE html>
<html>
    <head>
        <title>Практическая работа №1</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <meta charset="utf-8" />
    </head>
    <body>
        <div class="main container">
            <div class="inside-one">
                <div class="pic"></div>
                <div class="text">
                    <br />
                    Добро пожаловать!<br /><br />
                    Введите правильные имя пользователя и пароль
                    для входа на сайт!
                    <br /><br />
                    <a href="#">Регистрация</a>
                </div>
            </div>
            <h1>Вход</h1>
            <div class="inside-two">
				<?
					$log = 'admin';
					$pwd = 'pass12';
					if(isset($_POST['log']) && $_POST['log'] == $log && $_POST['pwd'] == $pwd) echo '<br /><h3 align="center">Привет, '.$_POST['log'].'</h3>';
					else if(isset($_POST['log']) && $_POST['log'] != $log && $_POST['pwd'] != $pwd) echo '<br /><h3 align="center">Введены неверные данные</h3>';
                    else echo '
                    <form class="form" method="post"><label><b>Имя пользователя</b></label><br />
						<input type="text" maxlength="30" name="log" class="inp">
						<br /><br />
						<label><b>Пароль</b></label><br />
						<input type="password" maxlength="30" name="pwd" class="inp">
						<br />
						<input type="submit" value="Вход" class="submit"/>
					</form>';
				?>
            </div>
        </div>
    </body>
</html>
