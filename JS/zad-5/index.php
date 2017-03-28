<!DOCTYPE html>
<html>
<head>
    <title>Zadanie 5</title>
    <meta charset="utf-8" />
</head>
<body>
<center>
<?
    for($i = 0; $i < 5; ++$i)
    {
       echo("<div id=\"div-$i\" onclick='work(this.id)' style=\"display: inline-block; background: black; width: 200px; height: 200px;\"></div> ");
    }
?>
</center>
<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
</script>
<script src="script.js"></script>
</body>
</html>
