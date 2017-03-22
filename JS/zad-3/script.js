$(document).ready(function()
{
    $('#send').click(function()
    {
        $.ajax(
            {
                type: "POST",
                url: "work.php",
                data:
                    {
                        val1: $('#val1').val(),
                        val2: $('#val2').val(),
                        val3: $('#val3').val()
                    },
                success: function (res)
                {
                    if(res == 'bad-numbers') $('#result').html('Плохие числа.');
                    else if(res == 'zero') $('#result').html('Делить на ноль нельзя.');
                    else if(res == 'bad-action') $('#result').html('Несовместимое действие.');
                    else
                    {
                        $('#result').html('');
                        $('#value').val(res);
                    }
                }
            }
        );
    });
});