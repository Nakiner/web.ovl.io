<!DOCTYPE html>
<html>
    <head>
        <title>Практическая работа №2</title>
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
                    <a href="index2.php">Регистрация</a>
                </div>
            </div>
            <h1>Вход</h1>
            <div class="inside-two">
				<?
                    if(isset($_POST['log']) && isset($_POST['pwd']) && !empty($_POST['log']) && !empty($_POST['pwd']))
                    {
                        $glb = false;
                        $file = fopen("logins.txt", "r");
                        while(!feof($file))
                        {
                            $line = fgets($file);
                            $arr = explode('|', $line);
                            if($_POST['log'] == @$arr[0] && $_POST['pwd'] == @$arr[1])
                            {
                                $pol = '';
                                switch(@$arr[5])
                                {
                                    case 'Мужской': { $pol = 'уважаемый'; break; }
                                    case 'Женский': { $pol = 'уважаемая';  break; }
                                }
                                echo '<div align="left" style="margin-left: 5%;margin-top: 10%;">Привет, '.$pol.' <b>'.@$arr[2].' '.@$arr[3].' '.@$arr[4].'</b><br />';
                                echo 'Email: <b>'.@$arr[6].'</b><br />';
                                echo 'Реферал: <b>'.@$arr[8].'</b></div>';
                                $glb = true;
                            }
                        }
                        if($glb == false)
                        {
                            echo '<b>Неверный логин или пароль.</b>';
                            echo '<form class="form" method="post"><label><b>Имя пользователя</b></label><br />
                            <input type="text" maxlength="30" name="log" class="inp" value="';if(isset($_POST['log'])) echo $_POST['log'];
                            echo '">
                            <br /><br />
                            <label><b>Пароль</b></label><br />
                            <input type="password" maxlength="30" name="pwd" class="inp">
                            <br />
                            <input type="submit" value="Вход" class="submit"/>
                        </form>';
                        }
                        fclose($file);
                    }
                    else
                    {
                            echo '<form class="form" method="post"><label><b>Имя пользователя</b></label><br />
                            <input type="text" maxlength="30" name="log" class="inp" value="';if(isset($_POST['log'])) echo $_POST['log'];
                            echo '">
                            <br /><br />
                            <label><b>Пароль</b></label><br />
                            <input type="password" maxlength="30" name="pwd" class="inp">
                            <br />
                            <input type="submit" value="Вход" class="submit"/>
                        </form>';
                    }
				?>
            </div>
        </div>
    </body>
</html>
