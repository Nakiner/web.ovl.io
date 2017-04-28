<!DOCTYPE html>
<html>
<head>
    <title>Zadanie 6</title>
    <meta charset="utf-8" />
    <style>
        .main .line {
            clear: both;
        }
        .main .line div {
            width: 20px;
            height: 20px;
            float: left;
            margin: 1px;
            border: 1px solid #ddd;
            border-radius: 0;
            background-color: #fff;
            transition: background-color .5s;
        }
        .main .line div.s {
            background-color: black;
            transition: background-color .5s;
        }
        .main .line div.f {
            background-color: red;
            transition: background-color 2s;
        }
    </style>
</head>
<body>
<div id="main" class="main">
<?php
    for($i = 0; $i < 20; $i++)
    {
        echo '<div class="line">';
        for($s = 0; $s < 40; $s++)
        {
            if($i == 0 && $s == 0) echo '<div data-n="1" class="'.$i.'_'.$s.' s"></div>';
            else echo '<div class="'.$i.'_'.$s.'"></div>';
        }
        echo '</div>';
    }
?>
</div>
<script
    src="
}https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
</script>
<script src="script.js"></script>
</body>
</html>
