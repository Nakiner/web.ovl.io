<?

    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $val3 = $_POST['val3'];
    if(is_numeric($val1) && is_numeric($val2))
    {
        switch($val3)
        {
            case '+':
            {
                echo $val1+$val2;
                break;
            }
            case '-':
            {
                echo $val1-$val2;
                break;
            }
            case '^':
            {
                echo pow($val1, $val2);
                break;
            }
            case '*':
            {
                echo $val1*$val2;
                break;
            }
            case '/':
            {
                if($val2 == 0) return print 'zero';
                echo $val1/$val2;
                break;
            }
            case '%':
            {
                if($val2 == 0) return print 'zero';
                echo $val1%$val2;
                break;
            }
            default:
            {
                return print 'bad-action';
                break;
            }
        }
    }
    else print 'bad-numbers';

?>