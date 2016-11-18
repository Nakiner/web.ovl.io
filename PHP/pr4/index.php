<!DOCTYPE html>
<html>
    <head>
        <title>Практическая работа №4</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <meta charset="utf-8" />
    </head>
    <body>
        <br /><br />
        <div align="center" width="1000">
                <form method="post">
                    <lable>URL: </lable>
                    <input type="text" name="url" value="<? if(isset($_POST['url'])) echo $_POST['url']; ?>"/>
                    <br /><br />
                    <lable>Что ищем? </lable>
                    <select name="act">
                        <option value="1">ФИО</option>
                        <option value="2">Цвет</option>
                        <option value="3">Телефон</option>
                        <option value="4">IP</option>
                        <option value="5">Время смерти</option>
                    </select>
                    <br /><br />
                    <input type="submit" value="СТАРТУЕМ" />
                </form>
        </div>
        <br />
        <div align="center" width="1000">
                <?
                    if(isset($_POST['url']) && empty($_POST['url'])) echo '<b>Вы не указали ссылку.</b>';
                    if(isset($_POST['act']) && empty($_POST['act'])) echo '<b>Вы не выбрали паттерн.</b>';
                    if(!empty($_POST['url']) && !empty($_POST['act']))
                    {
                        $out = '';
                        $html = file_get_contents(iconv("UTF-8","windows-1251", $_POST['url']));
                        switch($_POST['act'])
                        {
                            case 1:
                            {
                                preg_match_all('/[А-Я][а-я]{3,20}\s[А-Я][а-я]{3,20}\s[А-Я][а-я]{3,20}/mu',$html, $out, PREG_PATTERN_ORDER);//фио
                                break;
                            }
                            case 2:
                            {
                                preg_match_all('/[#]{1,}[A-Fa-f0-9]{6,6}/m',$html, $out, PREG_PATTERN_ORDER);//цвет
                                break;
                            }
                            case 3:
                            {
                                preg_match_all('/\+[1-9]{1,4}\([0-9]{3,7}\)[0-9]{7,7}/m',$html, $out, PREG_PATTERN_ORDER);//телефон
                                break;
                            }
                            case 4:
                            {
                                preg_match_all('/[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}/m',$html, $out, PREG_PATTERN_ORDER);//IP
                                break;
                            }
                            case 5:
                            {
                                preg_match_all('/[0-2][0-9]:[0-5][0-9]:[0-5][0-9]/m',$html, $out, PREG_PATTERN_ORDER);//time
                                break;
                            }
                            default:
                            {
                                echo 'Неизвестный параметр.<br />';
                                break;
                            }
                        }
                        if(empty($out[0])) echo 'Результаты не найдены.<br />';
                        else
                        {
                            echo '<b><i>Вот, что мы нашли для вас:</i></b><br /><br />';
                            foreach ($out as $key)
                            {
                                for($i = 0; $i < count($key); $i++)
                                {
                                    echo("<i><b>$key[$i]</b></i><br /><br />");
                                }
                            }
                        }
                    }
                ?>
        </div>
    </body>
</html>
