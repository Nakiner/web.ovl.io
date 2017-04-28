<?php
    $meme = ['user' => false, 'menu' => false];
    if($_POST['email'] == "admin@mail.ru" && $_POST['pwd'] == "root")
    {
        $meme['user'] = $_POST['email'];
        $meme['menu'] = '<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#popup" href="">For admin</a></li>';
    }
    echo json_encode($meme);
?>