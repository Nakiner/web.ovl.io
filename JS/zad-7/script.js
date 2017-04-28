$(document).ready(function()
{
    function replacing(text){
        text = text.replace(",",", как говорится,");
        text = text.replace(".",", как-то так,");
        text = text.replace("?",", не так ли?");
        text = text.replace("!",", я так сказал!");
        return text;
    }
    function negative_replacing(text){
        text = text.replace(", как говорится,", ",");
        text = text.replace(", как-то так,", ".");
        text = text.replace(", не так ли?", "?");
        text = text.replace(", я так сказал!", "!");
        return text;
    }

    $('body').find('*').each(function ()
    {
        $text = $(this).text();
        $(this).text(replacing($text));
    });

    $('body').find('*').click(function ()
    {
        $text = $(this).text();
        $(this).text(replacing($text));
    });
});