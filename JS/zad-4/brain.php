<?php
    if(isset($_POST['bgdiv']) && isset($_POST['bgbody']))
    {
        if(!empty($_POST['bgdiv']) && !empty($_POST['bgbody']))
        {
            $db = new mysqli('127.0.0.1', 'sql', 'sqlsql1', 'framework');
            $div = $_POST['bgdiv'];
            $body = $_POST['bgbody'];
            if($db->query("INSERT INTO block_colors VALUES('$div', '$body')") == true)
            {
                $db->close();
                exit('ok');
            }
            else
            {
                $db->close();
                exit('fail');
            }
        }
        exit('fail');
    }
    exit('fail');
?>