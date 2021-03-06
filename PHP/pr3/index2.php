<!DOCTYPE html>
<html>
    <head>
        <title>Практическая работа №3</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <meta charset="utf-8" />
    </head>
    <body>
        <div class="regdiv">
            <form method="post" align="center" class="regform">
                <label>Логин</label><br />
                <input type="text" name="log" value="<? if(isset($_POST['log'])) echo $_POST['log']; ?>"><br />
                <label>Пароль</label><br />
                <input type="password" name="pwd" value="<? if(isset($_POST['pwd'])) echo $_POST['pwd']; ?>"><br />
                <label>Пароль повторно</label><br />
                <input type="password" name="pwd1" value="<? if(isset($_POST['pwd1'])) echo $_POST['pwd1']; ?>"><br />
                <label>Фамилия</label><br />
                <input type="text" name="surname" value="<? if(isset($_POST['surname'])) echo $_POST['surname']; ?>"><br />
                <label>Имя</label><br />
                <input type="text" name="name" value="<? if(isset($_POST['name'])) echo $_POST['name']; ?>"><br />
                <label>Отчество</label><br />
                <input type="text" name="midname" value="<? if(isset($_POST['midname'])) echo $_POST['midname']; ?>"><br />
                <label>Пол</label><br />
                <select name="sex">
                    <option value="Мужской">Мужской</option>
                    <option value="Женский">Женский</option>
                </select><br />
                <label>EMail</label><br />
                <input type="email" name="email" value="<? if(isset($_POST['email'])) echo $_POST['email']; ?>"><br />
                <label>Возраст</label><br />
                <input type="text" name="age" value="<? if(isset($_POST['age'])) echo $_POST['age']; ?>"><br />
                <label>Реферал</label><br />
                <input type="text" name="ref" value="<? if(isset($_POST['ref'])) echo $_POST['ref']; ?>"><br />
                <label>Курс обучения</label><br />
                <select name="lvl">
                    <option value="1">1 курс</option>
                    <option value="2">2 курс</option>
                    <option value="3">3 курс</option>
                    <option value="4">4 курс</option>
                </select><br />
                <label>О себе</label><br />
                <textarea name="about"><? if(isset($_POST['about'])) echo $_POST['about']; ?></textarea><br />
                <input type="submit" value="Регистрация" class="submit"/>
                <input type="reset" value="Сброс" class="submit"/>
            </form>
            <?
                if(isset($_POST['log']) && isset($_POST['pwd']) && isset($_POST['pwd1']) && isset($_POST['surname']) && isset($_POST['name'])
                && isset($_POST['midname']) && isset($_POST['sex']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['ref']) && isset($_POST['lvl']) && isset($_POST['about'])
                && !empty($_POST['log']) && !empty($_POST['pwd']) && !empty($_POST['pwd1']) && !empty($_POST['surname']) && !empty($_POST['name'])
                && !empty($_POST['midname']) && !empty($_POST['sex']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['ref']) && !empty($_POST['lvl']) && !empty($_POST['about']))
                {
                    if(!preg_match('/^[a-z][a-z0-9]{3,16}+$/i',$_POST['log'])) echo '<b>Логин не соответсвует формату.</b>';
                    else if(!preg_match('/^[a-z0-9!@#%&\$\^\*]{6,20}+$/i',$_POST['pwd'])) echo '<b>Пароль не соответсвует формату.</b>';
                    else if(!preg_match('/^[a-z0-9!@#%&\$\^\*]{6,20}+$/i',$_POST['pwd1'])) echo '<b>Пароль не соответсвует формату.</b>';
                    else if(!preg_match('/^[А-ЯЁ]{3,20}+$/iu',$_POST['surname'])) echo '<b>Фамилия не соответсвует формату.</b>';
                    else if(!preg_match('/^[А-ЯЁ]{3,20}+$/iu',$_POST['name'])) echo '<b>Имя не соответсвует формату.</b>';
                    else if(!preg_match('/^[А-ЯЁ]{3,20}+$/iu',$_POST['midname'])) echo '<b>Отчество не соответсвует формату.</b>';
                    else if(!preg_match('/Мужской|Женский/',$_POST['sex'])) echo '<b>Пол не соответсвует формату.</b>';
                    else if(!preg_match('/^[a-z0-9_\.-]+@[a-z0-9]+\.[a-z0-9]{2,6}/i',$_POST['email'])) echo '<b>Почта не соответсвует формату.</b>';
                    else if(!preg_match('/^[0-9]{1,2}+$/',$_POST['age'])) echo '<b>Возраст не соответсвует формату.</b>';
                    else if(!preg_match('/^[a-z][a-z0-9]{3,20}+$/i',$_POST['ref'])) echo '<b>Реферал не соответсвует формату.</b>';
                    else if(!preg_match('/^[1-4]{1}+$/i',$_POST['lvl'])) echo '<b>Курс не соответсвует формату.</b>';
                    else
                    {
                        if($_POST['pwd'] == $_POST['pwd1'])
                        {
                            $pd = false;
                            $file = fopen("logins.txt", "r");
                            while(!feof($file))
                            {
                                $line = fgets($file);
                                $arr = explode('|', $line);
                                if(@$arr[0] == $_POST['log']) $pd = true;
                            }
                            fclose($file);
                            if($pd == false)
                            {
                                $str = $_POST['log'].'|'.$_POST['pwd'].'|'.$_POST['surname'].'|'.$_POST['name'].'|'.$_POST['midname'].'|'.$_POST['sex'].'|'.$_POST['email'].'|'.$_POST['age'].'|'
                                .$_POST['ref'].'|'.$_POST['lvl'].'|'.$_POST['about'];
                                $file = file_put_contents('logins.txt', $str.PHP_EOL , FILE_APPEND | LOCK_EX);
                                header('Location: index.php?st=0');
                            }
                            else echo '<b>Такой пользователь уже зарегистрирован.</b>';
                        }
                        else echo '<b>Пароли не совпадают</b>';
                    }
                }
                else if(isset($_POST['lvl'])) echo '<b>Не все поля заполнены</b>';
            ?>
        </div>
    </body>
</html>
